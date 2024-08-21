<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

//car
Route::get('cars_execl', [CarController::class, 'excel'])->name('cars.excel');
Route::resource('cars', CarController::class);

Route::get('/', function(){

    // $url = route('cars.index');
    // dd($url);
    // echo "123";
    // return redirect('/cars');
    return redirect()->route('cars.index');
});