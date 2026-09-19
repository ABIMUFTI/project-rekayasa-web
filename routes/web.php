<?php

use App\Http\Controllers\mahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/mahasiswa', [mahasiswaController::class, 'index']);