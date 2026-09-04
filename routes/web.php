<?php

use App\Http\Controllers\backend\dashboardController;
use App\Http\Controllers\backend\directorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.dream');
});





route::get('admin', [dashboardController::class, 'dashboard']);
route::get('admin/director', [directorController::class, 'createdirector'])->name('createdirector');

