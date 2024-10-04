<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TechStackController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProjectImageController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/anotherProjects/show/{id}', [LandingPageController::class, 'show'])->name('landingPage.show');

Route::get('/anotherProjects', [LandingPageController::class, 'index'])->name('landingPage.index');

Route::resource('projects', ProjectController::class)->middleware('auth');
Route::resource('techStacks', TechStackController::class)->middleware('auth');
Route::resource('projectImages', ProjectImageController::class)->middleware('auth');

require __DIR__.'/auth.php';
