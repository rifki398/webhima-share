<?php
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

Route::get('/', 'MainController@home')->name('home');

Route::get('/store', 'MainController@store')->name('store');

Route::get('/events', 'MainController@events')->name('events');

Route::get('/publications', 'MainController@publications')->name('publications');

Route::get('/private',[AdminController::class,'admin']);

Route::post('/private/login',[AdminController::class,'login']);
?>