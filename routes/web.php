<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;

Route::match(['get', 'post'], '/sum', [CalculatorController::class, 'sum']);
Route::match(['get', 'post'], '/subtract', [CalculatorController::class, 'subtract']);
Route::match(['get', 'post'], '/multiply', [CalculatorController::class, 'multiply']);
Route::match(['get', 'post'], '/power', [CalculatorController::class, 'power']);
Route::match(['get', 'post'], '/module', [CalculatorController::class, 'module']);
Route::match(['get', 'post'], '/sin', [CalculatorController::class, 'sin']);
Route::match(['get', 'post'], '/cosine', [CalculatorController::class, 'cosine']);


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
