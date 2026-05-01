<?php
// laravel-app/routes/web.php
use App\Http\Controllers\CarController;

Route::get('/cars', [CarController::class, 'index'])->name('cars.index');
Route::post('/cars', [CarController::class, 'store']);
Route::get('/api/cars', [CarController::class, 'apiCars']);
