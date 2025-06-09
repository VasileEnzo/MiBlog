<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Ruta principal (pública o redirección si está autenticado)
Route::get('/', function () {
    return auth()->check()
        ? redirect()->route('home')
        : view('welcome-public');
})->name('welcome.public');

Route::middleware('auth')->group(function () {
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['verified'])->name('dashboard');

    // Página de inicio personalizada
    Route::get('/home', [HomeController::class, 'getHome'])->name('home');

    // Perfil del usuario
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // CRUD de Posts (vistas ubicadas en la carpeta category/)
    Route::get('/category', [PostController::class, 'index'])->name('category.index');          // Listado de posts
    Route::get('/category/create', [PostController::class, 'create'])->name('category.create'); // Formulario de creación
    Route::post('/category', [CategoryController::class, 'store'])->name('category.store');     // Guardar nuevo post
    Route::get('/category/{post}/edit', [PostController::class, 'edit'])->name('category.edit'); // Editar post
    Route::put('/category/{post}', [CategoryController::class, 'update'])->name('category.update'); // Actualizar post
    Route::delete('/category/{post}', [PostController::class, 'destroy'])->name('category.destroy'); // Eliminar post
    Route::get('/category/show/{post}', [CategoryController::class, 'show'])->name('category.show'); // Ver detalle del post

});

require __DIR__.'/auth.php';
