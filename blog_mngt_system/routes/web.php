<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';

Route::middleware(['auth','role:admin'])->group(function(){
    Route::get('admin/dashboard',[AdminController::class,'AdminDashboard'])->name('admin.dashboard');
});

Route::middleware(['auth','role:editor'])->group(function(){
    Route::get('editor/dashboard',[EditorController::class,'EditorDashboard'])->name('editor.dashboard');
});

Route::middleware(['auth','role:author'])->group(function(){
    Route::get('author/dashboard',[AuthorController::class,'AuthorDashboard'])->name('author.dashboard');
});

Route::middleware(['auth','role:user'])->group(function(){
    Route::get('user/dashboard',[UserController::class,'UserDashboard'])->name('user.dashboard');
});





