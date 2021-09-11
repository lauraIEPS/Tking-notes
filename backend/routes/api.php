<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Courses;
use App\Http\Controllers\Notes;
use App\Http\Controllers\Todos;
use App\Http\Controllers\Tags;

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


Route::get('courses', [Courses::class, 'index'] );

Route::get('notes', [Notes::class, 'index'] );

Route::get('todos', [Todos::class, 'index'] );

Route::get('tags', [Tags::class, 'index'] );