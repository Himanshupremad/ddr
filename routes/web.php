<?php

use App\Http\Controllers\backend\dashboardController;
use App\Http\Controllers\backend\directorController;
use App\Http\Controllers\backend\listdirectorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.dream');
});





route::get('admin', [dashboardController::class, 'dashboard']);
route::get('admin/director', [directorController::class, 'createdirector'])->name('createdirector');
route::get('admin/listdirector', [listdirectorController::class, 'listdirector'])->name('listdirector');

