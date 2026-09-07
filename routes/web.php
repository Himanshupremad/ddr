<?php

use App\Http\Controllers\backend\amenitiesController;
use App\Http\Controllers\backend\dashboardController;
use App\Http\Controllers\backend\directorController;
use App\Http\Controllers\backend\galleryController;
use App\Http\Controllers\backend\listdirectorController;
use App\Http\Controllers\backend\projectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.dream');
});





route::get('admin', [dashboardController::class, 'dashboard']);
route::post('admin/director', [directorController::class, 'storedirector'])->name('create.director');
route::get('admin/director', [directorController::class, 'createdirector'])->name('createdirector');
route::get('admin/listdirector', [directorController::class, 'listdirector'])->name('listdirector');



route::post('admin/project', [projectController::class, 'storeproject'])->name('create.project');
route::get('admin/project', [projectController::class, 'createproject'])->name('createproject');
route::get('admin/listproject', [projectController::class, 'listproject'])->name('listproject');


route::post('admin/gallery', [galleryController::class, 'storegallery'])->name('create-image');
route::get('admin/gallery', [galleryController::class, 'creategallery'])->name('creategallery');
route::get('admin/listgallery', [galleryController::class, 'listgallery'])->name('listgallery');


route::post('admin/amenities', [amenitiesController::class, 'storeamenities'])->name('create-amenities');
route::get('admin/amenities', [amenitiesController::class, 'createamenities'])->name('createamenities');
route::get('admin/listamenities', [amenitiesController::class, 'listamenities'])->name('listamenities');