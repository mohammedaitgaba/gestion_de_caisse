<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Sign_inController;
use App\Http\Controllers\LogoutController;



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

Route::get('/registre',[RegisterController::class,'index'])->name('registre');
Route::post('/registre',[RegisterController::class,'add_user'])->name('registre');

Route::get('/sign_in',[Sign_inController::class,'index'])->name('sign_in');
Route::post('/sign_in',[Sign_inController::class,'store'])->name('sign_in');

Route::get('/logout',[LogoutController::class,'store'])->name('logout');



Route::get('/', function () {
    return view('dushboard');
});
// Route::get('/registre', function () {
//     return view('registre');
// });

// Route::get('/sign_in', function () {
//     return view('sign_in');
// });
