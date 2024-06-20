<?php

use App\Http\Controllers\Admin\BrandmodelsController;
use App\Http\Controllers\Admin\BrandsController;
use App\Http\Controllers\Admin\VehiclesController;
use App\Http\Controllers\Admin\ZonecoordsController;
use App\Http\Controllers\Admin\ZonesController;
use App\Models\Brandmodel;
use Illuminate\Support\Facades\Route;

Route::resource('brands', BrandsController::class)->names('admin.brands');
Route::resource('models', BrandmodelsController::class)->names('admin.models');
Route::resource('vehicles', VehiclesController::class)->names('admin.vehicles');
Route::get('modelsbybrand/{id}', [BrandmodelsController::class, 'modelsbybrand'])->name('admin.modelsbybrand');
Route::resource('zones', ZonesController::class)->names('admin.zones');
Route::resource('zonecoords', ZonecoordsController::class)->names('admin.zonecoords');
