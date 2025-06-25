<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route ::get('/sobrenos', function () { return 'Essa é a pagína sobre nós'; });

Route ::get('/logincadastro', function () { return 'Essa é a pagína de login e cadastro'; });
Route ::get('/menusalas', function () { return 'Essa é a pagína do menu de salas'; });
Route ::get('/sala', function () { return 'Essa é a pagína da sala'; });
Route ::get('/home', function () { return 'Essa é a pagína home'; });
Route ::get('/contatos', function () { return 'Essa é a pagína sobre os contatos'; });
Route ::get('/contrato', function () { return 'Essa é a pagína para contratar um profissional'; });
Route::get('/perfil', function(){
    return 'Essa é a página do perfil do usuário';
});

Route ::get('/home', function () { return 'Essa é a LandingPage'; });
Route::get('/auth', [AuthController::class, 'showAuthForm'])->name('auth.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/homepage', function(){
    return view('homepage');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route ::get('/home', function () { return 'Essa é a LandingPage'; });


require __DIR__.'/auth.php';
