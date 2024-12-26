<?php

use App\Http\Controllers\ExampleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [ExampleController::class, 'index']);
Route::get('/example', [ExampleController::class, 'example']);

Route::get('/react', function() {
    return view('index');
});