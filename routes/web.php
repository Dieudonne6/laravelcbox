<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PagesController::class, 'home']);
Route::get('/contact', [PagesController::class, 'contact']);
Route::post('/sendcontact', [PagesController::class, 'sendcontact']);
Route::get('/equipe', [PagesController::class, 'equipe']);
Route::get('/apropos', [PagesController::class, 'apropos']);
Route::get('/formations', [PagesController::class, 'formations']);
Route::get('/developmobile', [PagesController::class, 'developmobile']);
Route::get('/mtninformatique', [PagesController::class, 'mtninformatique']);
Route::get('/energierenouvelable', [PagesController::class, 'energierenouvelable']);
Route::get('/commerce', [PagesController::class, 'commerce']);
Route::get('/audit', [PagesController::class, 'audit']);
Route::get('/designgraphic', [PagesController::class, 'design']);
Route::get('/administrationReseaux', [PagesController::class, 'reseaux']);
Route::get('/applicationweb', [PagesController::class, 'applicationweb']);
Route::get('/siteweb', [PagesController::class, 'siteweb']);
Route::get('/referencement', [PagesController::class, 'referencement']);
Route::get('/controldaccespresence', [PagesController::class, 'controldaccespresence']);
Route::get('/videosurveillance', [PagesController::class, 'videosurveillance']);
Route::get('/contratmtn', [PagesController::class, 'contratmtn']);