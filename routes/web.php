<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\InventoryItemController;

Route::resource('rooms', RoomController::class);
Route::resource('bookings', BookingController::class);
Route::resource('customers', CustomerController::class);
Route::resource('staff', StaffController::class);
Route::resource('inventory_items', InventoryItemController::class);

Route::get('/', function () {
    return view('welcome');
});
