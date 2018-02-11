<?php

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

Route::get('/', 'HomeController@getHome');

/*** ROUTES FOR ADMIN **/
Route::prefix('admin')->group(function(){
        Route::get('/add-product','AdminController@getAddProduct');
        Route::post('/add-product','AdminController@postProduct');
        Route::get('/manage-categories','AdminController@manageCategories');
        Route::post('save-category','AdminController@saveCategory');
});
Route::get('/product/{id}','ProductController@get');
Route::get('products/add-to-cart/{id}','CartController@addToCart');
Route::get('checkout','CartController@checkout');
Route::post('user-payment-info','CartController@postUserPaymentInfo');
Auth::routes();
Route::get('cart','CartController@getCart');
Route::post('save-order','CartController@saveOrder');

Route::get('profile','ProfileController@show');

Route::get('categories/{category}/{subcategory}','ProductController@getCategory');