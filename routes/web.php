<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/achievements', [\App\Http\Controllers\AchievementController::class, 'index'])->name('achievements.index');

Route::get('/progress', [\App\Http\Controllers\ProgressController::class, 'index'])->name('progress.index');

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/topics', [App\Http\Controllers\TopicController::class, 'index'])
     ->middleware(['auth'])
     ->name('topics.index');

Route::get('/topics/{topic}/revision', [App\Http\Controllers\TopicController::class, 'revision'])
     ->middleware(['auth'])
     ->name('topics.revision');

Route::get('/topics/{topic}/notes', [App\Http\Controllers\NotesController::class, 'show'])
     ->middleware(['auth'])
     ->name('topics.notes');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

Route::middleware(['auth'])->group(function () {
    Route::get('/practice/{topic}/difficulty', [App\Http\Controllers\PracticeController::class, 'selectDifficulty'])->name('practice.difficulty');
    Route::get('/practice/{topic}/{difficulty}/count', [App\Http\Controllers\PracticeController::class, 'selectCount'])->name('practice.count');
    Route::post('/practice/{topic}/{difficulty}/start', [App\Http\Controllers\PracticeController::class, 'start'])->name('practice.start');
    Route::get('/practice/session/{session}', [App\Http\Controllers\PracticeController::class, 'question'])->name('practice.question');
    Route::post('/practice/session/{session}/answer', [App\Http\Controllers\PracticeController::class, 'answer'])->name('practice.answer');
    Route::get('/practice/session/{session}/summary', [App\Http\Controllers\PracticeController::class, 'summary'])->name('practice.summary');
});

});

require __DIR__.'/auth.php';
