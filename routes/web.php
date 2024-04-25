<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('eman', function () {
    return ('welcome for my frist site ');
});
