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

//Route::get('/products', function () {
 //   return view('products');
//});

Route::get('/product_details', function () {
    return view('product_details');
});

Route::get('/account', function () {
    return view('account');
});

Route::get('/cart', function () {
    return view('cart');
});
use App\Http\Controllers\ProductController;

Route::resource('products', ProductController::class);


use App\Http\Controllers\UserController;
Route::resource('/users', UserController::class);

use App\Http\Controllers\ContactController;

Route::get('/contact', [ContactController::class, 'show'])->name('contact.show'); 
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');


// routes/web.php

// routes/web.php

use App\Http\Controllers\AboutUsController;

Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us');

use App\Http\Controllers\FaqController;

Route::get('/faq', [FaqController::class, 'index1']);







Route::get('language/{locale}', function ($locale) {
    if (in_array($locale, ['english', 'bangla'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
});
