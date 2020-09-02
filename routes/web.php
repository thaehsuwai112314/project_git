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

Route::get('/','PageController@mainfun')->name('mainpage');

Route::get('brand','PageController@brandfun')->name('brandpage');

Route::get('itemdetail','PageController@itemdetailfun')->name('itemdetailpage');

// Route::get('loginpage','PageController@loginfun')->name('loginpage');

Route::get('promotion','PageController@promotionfun')->name('promotionpage');

Route::get('registerpage','PageController@registerfun')->name('registerpage');

Route::get('shopping','PageController@shoppingfun')->name('shoppingpage');

Route::get('subcategory','PageController@subcategoryfun')->name('subcategorypage');

Route::get('showcart','PageController@showcartfun')->name('showcartpage');
//backend
Route::get('dashboard','BackendController@dashboardfun')->name('dashboardpage');
Route::get('button','BackendController@buttonfun')->name('buttonpage');

Route::get('card','BackendController@cardfun')->name('cardpage');

Route::get('color','BackendController@colorfun')->name('colorpage');
Route::get('border','BackendController@borderfun')->name('borderpage');

Route::get('animate','BackendController@animatefun')->name('animatepage');

Route::get('other','BackendController@otherfun')->name('otherpage');

Route::get('dashlogin','BackendController@dashloginfun')->name('dashloginpage');

Route::get('dashregister','BackendController@dashregisterfun')->name('dashregisterpage');

Route::get('forgotpw','BackendController@forgotpwfun')->name('forgotpwpage');

Route::get('404','BackendController@dash404fun')->name('404page');

Route::get('blank','BackendController@blankfun')->name('blankpage');

Route::get('chart','BackendController@chartfun')->name('chartpage');

Route::get('table','BackendController@tablefun')->name('tablepage');







Route::resource('orders','OrderController');
//php artisan make:controller OrderController --resource --model=Order

Route::middleware('role:Admin')->group(function(){

Route::get('dashboard','BackendController@dashboardfun')->name('dashboardpage');

Route::resource('items','ItemController');

Route::resource('brands','BrandController');

Route::resource('categories','CategoryController');

Route::resource('subcategories','SubcategoryController'); 

});


Auth::routes();
Route::get('loginform','PageController@loginfun')->name('loginpage');

Route::get('/home', 'HomeController@index')->name('home');

