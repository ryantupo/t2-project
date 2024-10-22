<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SettingOutController;
use App\Http\Controllers\SurveyingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

// Home page
Route::get('/', [WelcomeController::class, 'index'])->name('home');

// About Us page
Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

// Quality Control page
Route::get('/quality-control', function () {
    return view('quality-control');
})->name('quality-control');

// Tank Analysis page
Route::get('/tank-analysis', function () {
    return view('tank-analysis');
})->name('tank-analysis');

// Volume Calculations page
Route::get('/volume-calculations', function () {
    return view('volume-calculations');
})->name('volume-calculations');

// Equipment page
Route::get('/equipment', function () {
    return view('equipment');
})->name('equipment');

// Projects & Clients page
Route::get('/projects-clients', function () {
    return view('projects-clients');
})->name('projects-clients');

// Contact Us page
Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');

Route::resource('projects', ProjectController::class);

// Protecting the clients and clients edit routes with 'auth' middleware
Route::middleware('auth')->group(function () {
    Route::resource('clients', ClientController::class);

    Route::get('clients/{client}/edit', [ClientController::class, 'edit'])->name('clients.edit');
    Route::put('clients/{client}', [ClientController::class, 'update'])->name('clients.update');
});

// Route for displaying clients on the projects-clients page
Route::get('/projects-clients', [ClientController::class, 'projectsClients'])->name('projects.clients');

// Contact form submission
Route::post('/contact-us', [ContactController::class, 'send'])->name('contact.send');

// Setting Out and Surveying pages
Route::get('/setting-out-engineer', [SettingOutController::class, 'index'])->name('setting-out-engineer');
Route::get('/surveying', [SurveyingController::class, 'index'])->name('surveying');

// Dashboard and profile routes with auth middleware
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Authentication routes (login, registration, etc.)
// require __DIR__.'/auth.php';

// Login routes
Route::get('/login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);

// Remove or comment out the registration routes
// Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
// Route::post('/register', [RegisteredUserController::class, 'store']);

// Password reset routes
Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');
Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

// Logout route
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
