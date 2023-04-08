<?php

use App\Http\Controllers\Auth\FacebookController;
use App\Http\Controllers\ExportController;
use App\Http\Livewire\Screens\AgeForm;
use App\Http\Livewire\Screens\Dashboard;
use App\Http\Livewire\Screens\GenderForm;
use App\Http\Livewire\Screens\LocationForm;
use App\Http\Livewire\Screens\Login;
use App\Http\Livewire\Screens\LookingForForm;
use App\Http\Livewire\Screens\Registration;
use App\Http\Livewire\Screens\SurveyCompleted;
use App\Http\Livewire\Screens\Welcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('auth/facebook', [FacebookController::class, 'redirectToFacebook']);
Route::get('auth/facebook/callback', [FacebookController::class, 'handleFacebookCallback']);
Route::get('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/');
});

// Screens
Route::middleware(['guest'])->group(function () {
    Route::get('/app', Welcome::class)->name('welcome');
    Route::get('/registration', Registration::class)->name('register');
    Route::get('/login', Login::class)->name('login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/location-form', LocationForm::class)->name('locationForm');
    Route::get('/gender-form', GenderForm::class)->name('genderForm');
    Route::get('/age-form', AgeForm::class)->name('ageForm');
    Route::get('/looking-for-form', LookingForForm::class)->name('lookingForForm');
    Route::get('/survey-completed', SurveyCompleted::class)->name('surveyCompleted');
});

//unbounce
Route::get('/u/{slug}', function ($slug) {
    return view('unbounce', ['slug' => $slug]);
})->name('unbounce');

Route::get('/', function () {
    return view('unbounce', ['slug' => 'home']);
})->name('home');

Route::get('/export/users', [ExportController::class, 'users'])
    ->name('export.users');
