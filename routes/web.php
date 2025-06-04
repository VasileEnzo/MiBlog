<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['verified'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // CRUD de posts, usando vistas en category/
    Route::get('/category', [PostController::class, 'index'])->name('category.index');
    Route::get('/category/create', [PostController::class, 'create'])->name('category.create');
    Route::post('/category', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/{post}/edit', [PostController::class, 'edit'])->name('category.edit');
    Route::put('/category/{post}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/category/{post}', [PostController::class, 'destroy'])->name('category.destroy');
    Route::get('/category/show/{post}', [CategoryController::class, 'show'])->name('category.show');

});

require __DIR__.'/auth.php';
