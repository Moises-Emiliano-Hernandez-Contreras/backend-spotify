<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\SessionController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Route::post('/register',"authController@register");
Route::post('/register',"SessionController@register")->name("sessioncontroller.register");
Route::post('/login',"SessionController@login")->name("sessioncontroller.login");

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/logout',"SessionController@logout")->name("sessioncontroller.logout");    
});

Route::middleware(['cors'])->group(function () {
    Route::get('/music','MusicController@listMusic');
    // Rutas que requieren CORS
});