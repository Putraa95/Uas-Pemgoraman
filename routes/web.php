<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WarehouseController;

// Rute utama
Route::get('/', function () {
    return view('welcome');
});

// Rute resource untuk WarehouseController
Route::resource('warehouses', WarehouseController::class)->except(['show']);


// Rute khusus untuk laporan PDF
Route::get('warehouses/report', [WarehouseController::class, 'generatePdf'])->name('warehouses.report');
