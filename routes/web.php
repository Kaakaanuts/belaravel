
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/project', function () {
    return view('project');
});

Route::get('/service', function () {
    return view('service');
});
