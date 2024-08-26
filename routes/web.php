<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

//car
Route::get('cars_execl', [CarController::class, 'excel'])->name('cars.excel');

Route::resource('cars', CarController::class);

Route::get('/', function () {

    // $url = route('cars.index');
    // dd($url);
    // echo "123";
    // return redirect('/cars');
    return redirect()->route('cars.index');
});

Route::get('/child', function () {
    return view('child');
});

Route::get('/f1', function () {
    return view('f1');
});

Route::get('/f2', function () {
    return view('f2');
});

Route::get('/f3', function () {
    return view('f3');
});

