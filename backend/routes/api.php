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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// swagger
Route::get('swagger', 'App\Http\Controllers\Swagger\SwaggerController@getJSON');

// system
Route::get('system/checkAlive', 'App\Http\Controllers\System\SystemController@checkAlive');

// photographer
Route::get('photographer/random', 'App\Http\Controllers\Photographer\PhotographerController@getPhotographerRandom');
Route::post('photographer/list', 'App\Http\Controllers\Photographer\PhotographerController@getPhotographer');

// picture
Route::get('picture/random', 'App\Http\Controllers\Picture\PictureController@getPictureRandom');