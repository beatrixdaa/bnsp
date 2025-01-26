<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;

use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('authors',  AuthorController::class);
Route::resource('books',  BookController::class);
Route::resource('registrations',  RegistrationController::class);
Route::get('registrations/cetak/{id}', [RegistrationController::class, 'cetak'])->name('registrations.cetak');
Route::put('/books/{id}', [BookController::class, 'update'])->name('books.update');



Route::middleware(['auth'])->group(function () {
    Route::get('authors', [AuthorController::class, 'index'])->name('authors.index');
    Route::get('authors/create', [AuthorController::class, 'create'])->name('authors.create');
    Route::get('authors/{author}/edit', [AuthorController::class, 'edit'])->name('authors.edit');
    Route::delete('authors/{author}', [AuthorController::class, 'destroy'])->name('authors.destroy');
});


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


require __DIR__.'/auth.php';


