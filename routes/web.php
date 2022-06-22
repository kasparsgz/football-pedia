<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\LeagueController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
 //   return view('welcome');
//});
Route::redirect('/', 'country');
Route::resource('country', CountryController::class);

Route::resource('league', LeagueController::class, ['except' => ['index',
'create']]);
Route::get('league/country/{id}', [LeagueController::class, 'index']);
Route::get('league/country/{id}/create', [LeagueController::class, 'create']);

Route::resource('team', TeamController::class, ['except' => ['index',
'create']]);
Route::get('league/country/team/{id}/', [TeamController::class, 'index']);
Route::get('league/country/team/{id}/create', [TeamController::class, 'create']);

Route::resource('player', PlayerController::class, ['except' => ['index',
'create']]);
Route::get('league/country/team/players/{id}/', [PlayerController::class, 'index']);
Route::get('league/country/team/players/{id}/create', [PlayerController::class, 'create']);
