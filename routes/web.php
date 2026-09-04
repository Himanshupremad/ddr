<?php

use App\Http\Controllers\backend\dashboardController;
use App\Http\Controllers\backend\directorController;
use App\Http\Controllers\backend\listdirectorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.dream');
});





route::get('admin', [dashboardController::class, 'dashboard']);
route::post('admin/director', [directorController::class, 'storedirector'])->name('create.director');
route::get('admin/director', [directorController::class, 'createdirector'])->name('createdirector');
route::get('admin/listdirector', [directorController::class, 'listdirector'])->name('listdirector');

