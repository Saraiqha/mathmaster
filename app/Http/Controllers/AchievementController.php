<?php

namespace App\Http\Controllers;

use App\Models\UserAchievement;
use App\Services\AchievementService;

class AchievementController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        // Catch up on any badges earned before this feature existed
        AchievementService::check($user);

        $badges = AchievementService::badges();
        $earned = UserAchievement::where('user_id', $user->id)->get()->keyBy('badge_key');

        return view('achievements.index', compact('badges', 'earned'));
    }
}