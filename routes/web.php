<?php

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
Route::get('/', function () {
    return view('dds/index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name('dashboard');
// Route::get('/dashboard2', [App\Http\Controllers\DashboardController::class, 'index2'])->name('index2');
// Route::get('/dashboard3', [App\Http\Controllers\DashboardController::class, 'index3'])->name('index3');
// Route::get('/mill-info', [App\Http\Controllers\DashboardController::class, 'millInfo'])->name('millInfo');
// Route::get('/mill-agriplot-stats', [App\Http\Controllers\DashboardController::class, 'millAgriplotStats'])->name('millAgriplotStats');
// Route::get('/mill-supplier-info', [App\Http\Controllers\DashboardController::class, 'millSupplierInfo'])->name('millSupplierInfo');
// Route::get('/users', [App\Http\Controllers\DashboardController::class, 'user'])->name('user');
// Route::get('/setting', [App\Http\Controllers\DashboardController::class, 'setting'])->name('setting');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/supplier-mills', [App\Http\Controllers\DashboardController::class, 'supplierMill'])->name('supplierMill');
Route::get('/supplier-mills-deforestation-risk', [App\Http\Controllers\DashboardController::class, 'supplierMillDeforestationRisk'])->name('supplierMillDeforestationRisk');
Route::get('/supplier-mills-legal-prf-risk', [App\Http\Controllers\DashboardController::class, 'supplierMillLegalPrfRisk'])->name('supplierMillLegalPrfRisk');
Route::get('/supplier-mills-legal-landuse-risk', [App\Http\Controllers\DashboardController::class, 'supplierMillLegalLanduseRisk'])->name('supplierMillLegalLanduseRisk');
Route::get('/supplier-mills-complex-supplybase-risk', [App\Http\Controllers\DashboardController::class, 'supplierMillComplexSupplybaseRisk'])->name('supplierMillComplexSupplybaseRisk');
Route::get('/trace-to-plots', [App\Http\Controllers\DashboardController::class, 'traceToPlots'])->name('traceToPlots');
// Route::post('/trace-to-actual-agriplots', [App\Http\Controllers\DashboardController::class, 'traceToActualAgriplot'])->name('traceToActualAgriplot');
Route::post('/trace-to-actual-agriplots', [App\Http\Controllers\DashboardController::class, 'traceToActualAgriplot'])->name('traceToActualAgriplot');

Route::get('/report', [App\Http\Controllers\DashboardController::class, 'report'])->name('report');
Route::get('/get-provinces/{country}', [App\Http\Controllers\DashboardController::class, 'getProvinces'])->name('getProvinces');
Route::get('/mill-info', [App\Http\Controllers\DashboardController::class, 'millInfo'])->name('millInfo');
Route::get('/mill-agriplot-stats', [App\Http\Controllers\DashboardController::class, 'millAgriplotStats'])->name('millAgriplotStats');
Route::get('/mill-supplier-info', [App\Http\Controllers\DashboardController::class, 'millSupplierInfo'])->name('millSupplierInfo');
Route::get('/users', [App\Http\Controllers\DashboardController::class, 'user'])->name('user');
Route::get('/setting', [App\Http\Controllers\DashboardController::class, 'setting'])->name('setting');
Route::get('/agriplot-by-mill', [App\Http\Controllers\DashboardController::class, 'agriplotByMill'])->name('agriplotByMill');
