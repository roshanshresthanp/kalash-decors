<?php
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;

use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Product\ProductController;
use App\Http\Controllers\Admin\User\UserController;
use App\Http\Controllers\Admin\Cart\CartController;
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

// Route::get('/', function () {
//     return view('welcome');
// });



Auth::routes();
// Route::redirect('/home','/');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('/about-us', AboutController::class);
Route::resource('/products', ShopController::class);
Route::resource('/contact', ContactController::class);

Route::get('/view-{name}',[ShopController::class,'productDetail'])->name('product.view');
Route::get('/show-{category}',[HomeController::class,'categoryProduct'])->name('cat.product');

Route::post('/search',[HomeController::class,'productSearch'])->name('product.search');

//cart 

Route::resource('/cart', CartController::class)->middleware('auth');

// Route::get('/search',[HomeController::class,'productSearch'])->name('product.search');


// Route::resource('category', CategoryController::class)->middleware('can:isAdmin');








Route::group(['prefix'=>'admin','as'=>'admin.','middleware'=>['auth']], function(){

    Route::resource('user',UserController::class)->middleware('can:isAdmin');
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::resource('category', CategoryController::class)->middleware('can:isAdmin');
    Route::resource('product', ProductController::class)->middleware('can:isAdmin');
    // Route::resource('/contact', ContactController::class)->middleware('isUser');


});
