<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Home page
Route::get('/', [WelcomeController::class, 'index'])->name('home');

// About Us page
Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

// Setting Out Engineer page
Route::get('/setting-out-engineer', function () {
    return view('setting-out-engineer');
})->name('setting-out-engineer');

// Quality Control page
Route::get('/quality-control', function () {
    return view('quality-control');
})->name('quality-control');

// Surveying page
Route::get('/surveying', function () {
    return view('surveying');
})->name('surveying');

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
Route::resource('clients', ClientController::class);
// Route for displaying clients on the projects-clients page
Route::get('/projects-clients', [ClientController::class, 'projectsClients'])->name('projects.clients');


Route::get('clients/{client}/edit', [ClientController::class, 'edit'])->name('clients.edit');
Route::put('clients/{client}', [ClientController::class, 'update'])->name('clients.update');


Route::post('/contact-us', [ContactController::class, 'send'])->name('contact.send');
