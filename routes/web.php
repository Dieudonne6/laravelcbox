<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [PagesController::class, 'home']);
Route::get('contact', [PagesController::class, 'contact']);
Route::get('teams', [PagesController::class, 'teams']);
Route::get('about', [PagesController::class, 'about']);
Route::get('formations', [PagesController::class, 'formations']);
