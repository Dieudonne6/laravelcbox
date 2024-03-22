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
Route::get('/audit', [PagesController::class, 'audit']);
Route::get('/designgraphic', [PagesController::class, 'design']);
Route::get('/administrationReseaux', [PagesController::class, 'reseaux']);
Route::get('/applicationweb', [PagesController::class, 'applicationweb']);
Route::get('/siteweb', [PagesController::class, 'siteweb']);
Route::get('/referencement', [PagesController::class, 'referencement']);

Route::get('/videosurveillance', [PagesController::class, 'videosurveillance']);
Route::get('/controldaccespresence', [PagesController::class, 'controldaccespresence']);
