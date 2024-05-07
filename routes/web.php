<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShoeCRUDController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('shoes', ShoeCRUDController::class);
