<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\TaskController;
use App\Http\Controllers\Api\EventController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(UserController::class)->group(function(){
    Route::get('/Users','index');
    Route::post('/UserAdd','store');
    Route::get('/User/{id}','show');
    Route::get('/UserByMail/{mail}','showByEmial');
    Route::put('/UserUpdate/{id}','update');
    Route::delete('/UserDelete/{id}','destroy');
});

Route::controller(TaskController::class)->group(function(){
    Route::get('/Tasks','index');
    Route::post('/TaskAdd','store');
    Route::get('/Task/{id}','show');
    Route::put('/TaskUpdate/{id}','update');
    Route::delete('/TaskDelete/{id}','destroy');
});

Route::controller(EventController::class)->group(function(){
    Route::get('/Events','index');
    Route::post('/EventAdd','store');
    Route::get('/Event/{id}','show');
    Route::put('/EventUpdate/{id}','update');
    Route::delete('/EventDelete/{id}','destroy');
});