<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\CartController;
/** Set active class for sidebar menu */
function set_active($route) {
    if (is_array($route)){
        return in_array(Request::path(), $route) ? 'active' : '';
    }
    return Request::path() == $route ? 'active' : '';
}

/** Set show class for sidebar menu */
function set_show($route) {
    if (is_array($route)){
        return in_array(Request::path(), $route) ? 'show' : '';
    }
    return Request::path() == $route ? 'show' : '';
}

// Root route (shows product grid page)
Route::get('/', [EcommerceController::class, 'productGrid'])->name('home');

// Authentication routes
Auth::routes();

// Authentication related routes
Route::group(['namespace' => 'App\Http\Controllers\Auth'], function() {

    // Login routes
    Route::controller(LoginController::class)->group(function () {
        Route::get('/login', 'login')->name('login');
        Route::post('/login', 'authenticate');
        Route::get('/logout', 'logout')->name('logout');
        Route::get('logout/page', 'logoutPage')->name('logout/page');
    });

    // Register routes
    Route::controller(RegisterController::class)->group(function () {
        Route::get('/register', 'register')->name('register');
        Route::post('/register', 'storeUser')->name('register.store');
    });

    // Forgot Password routes
    Route::controller(ForgotPasswordController::class)->group(function () {
        Route::get('forget-password', 'getEmail')->name('forget-password');
        Route::post('forget-password', 'postEmail')->name('forget-password.post');    
    });

    // Reset Password routes
    Route::controller(ResetPasswordController::class)->group(function () {
        Route::get('reset-password/{token}', 'getPassword');
        Route::post('reset-password', 'updatePassword')->name('reset-password.update');    
    });
});

// General application routes (protected by auth middleware)
Route::group(['namespace' => 'App\Http\Controllers', 'middleware' => 'auth'], function() {

    // Home routes
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // Account pages
    Route::get('page/account', [AccountController::class, 'index'])->name('page/account');

    // E-commerce routes
    Route::controller(EcommerceController::class)->group(function () {
        Route::get('product/create/page', 'productCreate')->name('product/create/page');
        Route::get('product/overview/page', 'productOverview')->name('product/overview/page');
        Route::get('product/list/page', 'productList')->name('product/list/page');
        Route::get('product/grid/page', 'productGrid')->name('product/grid/page');
        Route::get('shopping/cart/page', 'shoppingCart')->name('shopping/cart/page');
        Route::get('ecommerce/checkout/page', 'ecommerceCheckout')->name('ecommerce/checkout/page');
        Route::get('ecommerce/order/page', 'ecommerceOrder')->name('ecommerce/order/page');
        Route::get('ecommerce/order/overview/page', 'orderOverView')->name('ecommerce/order/overview/page');

    });

  
    
        Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');


    // User management routes
    Route::controller(UserManagementController::class)->group(function () {
        Route::get('user/list/page', 'userList')->name('user/list/page');
        Route::get('get-users-data', 'getUsersData')->name('get-users-data'); // Fetch all user data
    });
});
