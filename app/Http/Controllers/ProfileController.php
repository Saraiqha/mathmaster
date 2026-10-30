<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
    $user = $request->user();

    $sessions = \App\Models\PracticeSession::where('user_id', $user->id)
        ->where('is_completed', 1);

    $stats = [
        'sessions' => (clone $sessions)->count(),
        'average'  => (clone $sessions)->count() ? round((clone $sessions)->avg('score')) : 0,
        'badges'   => \App\Models\UserAchievement::where('user_id', $user->id)->count(),
    ];

    $recentBadges = \App\Models\UserAchievement::where('user_id', $user->id)
        ->orderByDesc('earned_at')
        ->take(4)
        ->pluck('badge_key');

    $badgeList = \App\Services\AchievementService::badges();

    return view('profile.edit', [
        'user' => $user,
        'stats' => $stats,
        'recentBadges' => $recentBadges,
        'badgeList' => $badgeList,
    ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
