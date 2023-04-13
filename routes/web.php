<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\admin\DasboardController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegistController;
use App\Http\Controllers\checkout\DestinationCheckoutController;
use App\Http\Controllers\checkout\OrderController;
use App\Http\Controllers\checkout\SummanaryController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\DestinationDetailController;
use App\Http\Controllers\DiscoveryController;
use App\Http\Controllers\OpentripController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PrivateController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[DiscoveryController::class,'index']);
Route::get('/discovery',[DiscoveryController::class,'index']);
Route::get('/destination',[DestinationController::class,'index']);
Route::get('/package',[PackageController::class,'index']);
Route::get('/about',[AboutController::class,'index']);
Route::get('/destination-detail',[DestinationDetailController::class,'index']);
Route::get('/open-trip',[OpentripController::class,'index']);
Route::get('/private-trip',[PrivateController::class,'index']);

// checkout
Route::get('/destination-checkout',[DestinationCheckoutController::class,'index']);
Route::get('/destination-summary',[SummanaryController::class,'index']);
Route::get('/order-succes',[OrderController::class,'index']);


// admin
Route::get('/dashboard',[DasboardController::class,'index']);

// auth
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::get('/register',[RegistController::class,'index'])->name('register');