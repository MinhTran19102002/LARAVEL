<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;


Route::get('/room', [RoomController:: class, 'index']);
Route::get('/addroom', [RoomController:: class, 'addRoom']);

Route::post('/room', [RoomController:: class, 'store']);

// Route::get('/room', function () {
//     RoomController::class;
//     "index";
// });


Route::get('/', function () {
    return view('welcome');
});


// Route::get('/room', function () {
//     return "Hello";
// });

