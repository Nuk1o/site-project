<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyPageController;


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

Route::get('/', function () {
    return "aaaaaaaaa";
});

Route::get('/test', [MyPageController::class, 'index1']);
//Route::get('/my_page', [MyPlaceController::class, 'index']);
