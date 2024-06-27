<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\CustomAuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CustomPageController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\CategoryController;

// Home Route
Route::get('/', function () {
    return view('home');
})->name('home');

// Custom Page Route
Route::middleware(['auth:sanctum', 'verified'])->get('/page', [CustomPageController::class, 'show'])->name('custom.page');

// Authentication Routes
Route::get('/login', [CustomAuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [CustomAuthenticatedSessionController::class, 'store'])
    ->middleware('guest');

Route::post('/logout', [CustomAuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

// Registration Routes
Route::get('/register', [RegisteredUserController::class, 'create'])
    ->middleware('guest')
    ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])
    ->middleware('guest');

// Dashboard Route
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::post('/logout', [CustomAuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

// Route for managing notes
Route::get('/notes', [NoteController::class, 'index'])->name('notes.index');
// Route for managing categories
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
// Route for searching notes
Route::get('/search/notes', [NoteController::class, 'search'])->name('search.notes');