<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
Route::get('/home/search', [App\Http\Controllers\HomeController::class, 'search'])->name('home.search');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Login Route
// Route::post('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('login');

// Route clience register and login
Route::get('/user_login', function (){
    return view('login');   
});
Route::post('register/save', [App\Http\Controllers\RegisterController::class, 'save'])->name('register.save');
Route::get('register', [App\Http\Controllers\RegisterController::class, 'register'])->name('register.index');
Route::get('user_login', [App\Http\Controllers\UserController::class, 'user_login'])->name('user_login.index');
Route::post('user_login/dologin', [App\Http\Controllers\UserController::class, 'do_login']);
Route::get('user_login/logout', [App\Http\Controllers\UserController::class, 'logout']);


//Route Product Details
Route::get('details/iphone', [App\Http\Controllers\DetailsController::class, 'iphone']);
Route::get('details/samsung', [App\Http\Controllers\DetailsController::class, 'samsung']);
Route::get('details/oppo', [App\Http\Controllers\DetailsController::class, 'oppo']);
Route::get('details/vivo', [App\Http\Controllers\DetailsController::class, 'vivo']);
Route::get('details/secondhand', [App\Http\Controllers\DetailsController::class, 'secondhand']);
Route::get('details/specialoffer', [App\Http\Controllers\DetailsController::class, 'specialoffer']);
Route::get('iPhone/', [App\Http\Controllers\AllphoneController::class, 'index'])->name('all_phone.index');
Route::get('samsung/', [App\Http\Controllers\AllsamsungController::class, 'index'])->name('all_samsung.index');
Route::get('oppo/', [App\Http\Controllers\OppoController::class, 'index'])->name('all_oppo.index');
Route::get('vivo/', [App\Http\Controllers\VivoController::class, 'index'])->name('all_vivo.index');

// Route Add product to Cart
Route::get('cart', [App\Http\Controllers\CartController::class, 'index']);
Route::post('cart/save', [App\Http\Controllers\CartController::class, 'save']);
Route::get('cart/payment', [App\Http\Controllers\CartController::class, 'payment']);
Route::get('removeCart/{id}', [App\Http\Controllers\CartController::class, 'remove']);

Route::get('payment', [App\Http\Controllers\PaymentController::class, 'index'])->name('payment.index');
//Route Our Team
Route::get('contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact.index');

Route::get('google_pixel', [App\Http\Controllers\PixelController::class, 'index']);

Route::get('aboutus', [App\Http\Controllers\AboutUs::class, 'index'])->name('aboutus.index');
Route::get('google_pixel', [App\Http\Controllers\GooglePixel::class, 'index'])->name('google_pixel.index');
Route::get('tablet_home', [App\Http\Controllers\TabletHome::class, 'index'])->name('tablethome.index');
Route::get('second_hand_product', [App\Http\Controllers\SecondHandProduct::class, 'index'])->name('secondhand.index');
Route::get('special_offer', [App\Http\Controllers\SpecialOffer::class, 'index'])->name('speicaloffer.index');
Route::get('news', [App\Http\Controllers\NewsController::class, 'index'])->name('news.index');

Route::get('search', [App\Http\Controllers\SearchController::class, 'index'])->name('search.index');