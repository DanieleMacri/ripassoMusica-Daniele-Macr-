<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'home'])->name('home'); 

Route::get('/album/all', [AlbumController::class, 'index'])->name('album.index');

Route::middleware(['auth'])->group(function () {
    
    Route::get('/album/create', [AlbumController::class, 'create'])->name('album.create');
    Route::post('/album/store', [AlbumController::class, 'store'])->name('album.store');
    Route::get('/album/show/{album}', [AlbumController::class, 'show'])->name('album.show');
    Route::get('/album/update/{album}', [AlbumController::class, 'update'])->name('album.update');
    Route::put('/album/edit/{album}', [AlbumController::class, 'edit'])->name('album.edit');
    Route::delete('/album/delete/{album}', [AlbumController::class, 'destroy'])->name('album.destroy');
});