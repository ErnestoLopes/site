<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\NoticiaController;
use App\Models\Informations;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\ContactController;

Route::get('/', [InformationController::class, 'show']);

Route::get('/sobre', function () {
    return view('sobre');
});
Route::get('/add', function () {
    return view('exames');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/contacto', function () {
    return view('contacto');
});
Route::get('/servicos', function () {
    return view('servicos');
});
Route::get('/noticias', [InformationController::class, 'index']);
Route::post('/noticias', [InformationController::class, 'store']);
Route::post('/enviar-contato', [ContactController::class, 'send'])->name('enviar.contato');
