<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

Route::prefix('user')->group(function () {

    Route::get('login', function () {
        return Inertia::render('User/Login', []);
    });

});
