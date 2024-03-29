<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('api')
    ->namespace('Api')
    ->name('api.')
    ->group(function () {

        Route::resource('people', 'PeopleController')->only([
            'index', 'show'
        ]);

        Route::resource('planets', 'PlanetController')->only([
            'index', 'show'
        ]);

        Route::resource('films', 'FilmController')->only([
            'index', 'show'
        ]);

        Route::resource('species', 'SpeciesController')->only([
            'index', 'show'
        ]);

        Route::resource('vehicles', 'VehicleController')->only([
            'index', 'show'
        ]);

        Route::resource('starships', 'StarshipController')->only([
            'index', 'show'
        ]);
    });
