<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;

Route::get('/', [ContactController::class, 'index']);

Route::post('/confirm', [ContactController::class, 'confirm']);

Route::post('/thanks', [ContactController::class, 'thanks']);

// Route::get('/', [AuthController::class, 'index']);

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/test', function (){
    return 'OK';
});
