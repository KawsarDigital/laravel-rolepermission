<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\AdminController;



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

// Route::get('/', function () {
//     return view('welcome');
// });


// Admin Route Here.......

Route::group(['prefix' => 'admin'], function () {

    Route::get('/', [AdminController::class, 'index'])->name('admin_dashboard');

});

