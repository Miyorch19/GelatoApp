<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserBuilderController;
use App\Http\Controllers\TestDatabaseController;

Route::get('/test-db', [TestDatabaseController::class, 'testConnection']);
Route::get('/test-singleton', [TestDatabaseController::class, 'testSingleton']);

Route::get('/crear-usuario', [UserBuilderController::class, 'crearUsuario']);
Route::get('/listar-usuarios', [UserBuilderController::class, 'listarUsuarios']);

Route::get('/', function () {
    return view('home');
});