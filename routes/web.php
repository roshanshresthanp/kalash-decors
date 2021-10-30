<?php
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ShopController;

use App\Http\Controllers\Admin\Category\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
// use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/aboutus', AboutController::class);
Route::resource('/products', ShopController::class);
Route::resource('/contact', ContactController::class);
Route::group(['prefix'=>'admin','as'=>'admin.','middleware'=>['auth']], function(){

    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::resource('category', CategoryController::class);
});
