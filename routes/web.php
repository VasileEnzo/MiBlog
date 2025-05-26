<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;

Route::get('/', [HomeController::class, 'getHome']);

Route::get('/login', function (){
    return 'Login usuario';
});

Route::get('/logout', function(){
    return 'Logout usuaruio';
});

Route::get('/category', [CategoryController::class, 'getIndex']);

Route::get('/category/show/{id}', [CategoryController::class, 'getShow']);

Route::get('/category/create', [CategoryController::class, 'getCreate']);

Route::post('/category/edit/{id}',[CategoryController::class, 'getEdit']);

Route::post('/category', [CategoryController::class, 'postStore'])->name('category.store');