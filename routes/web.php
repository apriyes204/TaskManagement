<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Fortify;
use Laravel\Fortify\Http\Controllers\NewPasswordController;
use Laravel\Fortify\Http\Controllers\PasswordResetLinkController;

Route::middleware(['guest'])->group(function() {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::fallback(function() {
        return redirect('/');
    });
});

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['auth'])->group(function() {
    Route::get('/', function() {
        return redirect(route('tasks.dashboard'));
    });
    Route::get('/dashboard', [TaskController::class, 'index'])->name('tasks.dashboard');
    // Route::get('/tasks/{task}', [TaskController::class, 'show'])->name('tasks.show');
    Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
    Route::put('/tasks/{id}/update', [TaskController::class, 'update'])->name('tasks.update');
    Route::put('/tasks/{id}/status', [TaskController::class, 'updateStatus'])->name('tasks.updateStatus');
    Route::delete('/tasks/{id}', [TaskController::class, 'destroy'])->name('tasks.destroy');
});


