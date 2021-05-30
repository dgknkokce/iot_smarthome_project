<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', [App\Http\Controllers\DeviceController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::resource('/devices', 'App\Http\Controllers\DeviceController')->middleware(['auth']);
Route::resource('/sensors', 'App\Http\Controllers\SensorController')->middleware(['auth']);
Route::resource('/sensorproperties', 'App\Http\Controllers\SensorpropertyController')->middleware(['auth']);
/*Route::get('/dashboard', function () {
	$devices = Auth::user()->devices->get();
    return view('dashboard', [
    	$devices => $devices
    ]);
})->middleware(['auth'])->name('dashboard');*/
Route::get('/getsound', [App\Http\Controllers\DevicerequestController::class, 'getsound'])->middleware(['auth'])->name('getsound');
Route::get('/getred', [App\Http\Controllers\DevicerequestController::class, 'getRed'])->middleware(['auth'])->name('getred');
Route::get('/getgreen', [App\Http\Controllers\DevicerequestController::class, 'getGreen'])->middleware(['auth'])->name('getgreen');
Route::get('/getblue', [App\Http\Controllers\DevicerequestController::class, 'getBlue'])->middleware(['auth'])->name('getblue');


require __DIR__.'/auth.php';
