<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\Auth\MicrosoftLoginController;

Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/auth/microsoft', [MicrosoftLoginController::class, 'redirectToProvider'])->name('microsoft.login');
Route::get('/auth/microsoft/callback', [MicrosoftLoginController::class, 'handleProviderCallback']);
Route::post('/logout', [MicrosoftLoginController::class, 'logout'])->name('logout');

// Protected Routes
Route::prefix('it-team')->middleware(['web', 'auth'])->group(function () {
    // IT Team Portal routes
    Route::get('/', [HomeController::class, 'itTeam'])->name('it-team');
    Route::post('/feedback', [FeedbackController::class, 'submitFeedback'])->name('it-team.feedback');
});

// Debug route
Route::get('/debug-socialite', function() {
    return 'Socialite debug route - State: ' . session()->get('state');
});
