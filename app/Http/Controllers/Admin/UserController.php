<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PracticeSession;
use App\Models\User;
use App\Models\UserAchievement;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $query = User::where('is_admin', false)->latest();

        if ($request->filled('search')) {
            $s = $request->search;
            $query->where(function ($q) use ($s) {
                $q->where('name', 'like', "%$s%")->orWhere('email', 'like', "%$s%");
            });
        }

        $users = $query->paginate(15)->withQueryString();

        $stats = PracticeSession::where('is_completed', 1)
            ->whereIn('user_id', $users->pluck('id'))
            ->selectRaw('user_id, count(*) as sessions, avg(score) as average')
            ->groupBy('user_id')
            ->get()
            ->keyBy('user_id');

        return view('admin.users.index', compact('users', 'stats'));
    }

    public function show(User $user)
    {
        abort_if($user->is_admin, 404);

        $sessions = PracticeSession::where('user_id', $user->id)
            ->where('is_completed', 1)
            ->with('topic')
            ->latest()
            ->get();

        $summary = [
            'sessions' => $sessions->count(),
            'average'  => $sessions->count() ? round($sessions->avg('score')) : 0,
            'best'     => $sessions->count() ? round($sessions->max('score')) : 0,
            'badges'   => UserAchievement::where('user_id', $user->id)->count(),
        ];

        $byTopic = $sessions->groupBy('topic_id')->map(function ($group) {
            return [
                'name'     => $group->first()->topic->name,
                'sessions' => $group->count(),
                'average'  => round($group->avg('score')),
            ];
        });

        $recent = $sessions->take(10);

        return view('admin.users.show', compact('user', 'summary', 'byTopic', 'recent'));
    }

    public function destroy(Request $request, User $user)
    {
        if ($user->is_admin) {
            return back()->with('error', 'Admin accounts cannot be deleted here.');
        }
        if ($user->id === $request->user()->id) {
            return back()->with('error', 'You cannot delete your own account.');
        }

        try {
            DB::transaction(function () use ($user) {
                $sessionIds = DB::table('practice_sessions')->where('user_id', $user->id)->pluck('id');

                DB::table('practice_answers')->whereIn('practice_session_id', $sessionIds)->delete();
                DB::table('practice_sessions')->where('user_id', $user->id)->delete();
                DB::table('level_unlocks')->where('user_id', $user->id)->delete();
                DB::table('user_achievements')->where('user_id', $user->id)->delete();
                DB::table('password_reset_tokens')->where('email', $user->email)->delete();

                $user->delete();
            });
        } catch (QueryException $e) {
            return back()->with('error', 'This account could not be deleted because other records still depend on it.');
        }

        return redirect()->route('admin.users.index')->with('success', 'Student account deleted.');
    }
}