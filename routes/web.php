<?php

use Illuminate\Support\Facades\Route;


// Web routes
Route::get('/', function () {
    return view('welcome');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/superadmin.php';
require __DIR__ . '/admin.php';
require __DIR__ . '/user.php';