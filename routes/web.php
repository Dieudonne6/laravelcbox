<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [PagesController::class, 'home']);
Route::get('/contact', [PagesController::class, 'contact']);
Route::get('/equipe', [PagesController::class, 'equipe']);
Route::get('/apropos', [PagesController::class, 'apropos']);
Route::get('/formations', [PagesController::class, 'formations']);
