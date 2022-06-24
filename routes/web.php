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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::redirect('/', 'login');
Route::resource('country', CountryController::class);//->middleware('auth')
Route::get('country/{id}/update', [CountryController::class, 'update']);

Route::resource('league', LeagueController::class, ['except' => ['index',
'create']]);
Route::get('league/country/{id}', [LeagueController::class, 'index']);
Route::get('league/country/{id}/update', [LeagueController::class, 'update']);
Route::get('league/country/{id}/create', [LeagueController::class, 'create']);

Route::resource('team', TeamController::class, ['except' => ['index',
'create']]);
Route::get('league/country/team/{id}/', [TeamController::class, 'index']);
Route::get('league/country/team/{id}/update', [TeamController::class, 'update']);
Route::get('league/country/team/{id}/create', [TeamController::class, 'create']);

Route::resource('player', PlayerController::class, ['except' => ['index',
'create']]);
Route::get('league/country/team/players/{id}/', [PlayerController::class, 'index']);
Route::get('league/country/team/players/{id}/update', [PlayerController::class, 'update']);
Route::get('league/country/team/players/{id}/create', [PlayerController::class, 'create']);
