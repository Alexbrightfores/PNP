<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/tickets', 'App\Http\Controllers\ApiController@getTickets')->middleware('jwt');;
Route::post('/personnel', 'App\Http\Controllers\ApiController@getPersonnel');
Route::post('/violations', 'App\Http\Controllers\ApiController@getViolations');
Route::post('/stations', 'App\Http\Controllers\ApiController@getStations');

Route::post('/add-ticket', 'App\Http\Controllers\ApiController@addTicket');
Route::post('/ticket/{id}', 'App\Http\Controllers\ApiController@updateTicket');

Route::post('/profile', 'App\Http\Controllers\ApiController@getProfile');
Route::post('/profile/{id}', 'App\Http\Controllers\ApiController@updateProfile');
// Route::post('/logout', 'App\Http\Controllers\ApiController@logout');