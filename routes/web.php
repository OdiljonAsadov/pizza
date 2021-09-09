<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;

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

// Route::get('/admin', function () {
//     return view('index');
// });

Route::get('/admin', 'adminController@count');
Route::get('/login', 'authController@login');
Route::get('/registration', 'authController@registration');
Route::post('/login-user', 'authController@loginUser');
Route::get('/user-profil', 'authController@userProfil');
Route::get('/logOut', 'authController@logOut');

Route::get('/', function () {
    return view('main.index');
});

Route::get('/about', function () {
    return view('main.about');
});
Route::get('/blogs', function () {
    return view('main.blog');
});
Route::get('/blog-single', function () {
    return view('main.blog-single');
});
Route::get('/contact', function () {
    return view('main.contact');
});
Route::get('/services', function () {
    return view('main.services');
});

Route::get('/loginAuth', function () {
    return view('main.login');
});
Route::get('/registrationAuth', function () {
    return view('main.registration');
});



Route::get('/cart', 'productController@cart');
Route::get('add-to-cart/{id}', 'productController@addToCart')->name('add.to.cart');
Route::patch('update-cart', 'productController@updateCart')->name('update.cart');
Route::delete('remove-from-cart', 'productController@remove')->name('remove.from.cart');


Route::get('/', 'about_cafeController@aboutCafe');
Route::get('/about', 'about_cafeController@about_aboutCafe');
Route::get('/menu-page', 'menuController@menuPage');


Route::get('/updated-activity', 'TelegramBotController@updatedActivity');

# --- ORDERS --- #

Route::get('/orders', 'OrdersController@index');
Route::post('/orders/add', 'OrdersController@store');
Route::get('/orders/edit/{id}', 'OrdersController@edit');
Route::post('/orders/edit/{id}', 'OrdersController@update');
Route::get('/orders/delete/{id}', 'OrdersController@destroy');

# --- aboutCafe --- #

Route::get('/aboutCafe', 'about_cafeController@index');
Route::get('/aboutCafe/add', 'about_cafeController@create');
Route::post('/aboutCafe/add', 'about_cafeController@store');
Route::get('/aboutCafe/edit/{id}', 'about_cafeController@edit');
Route::post('/aboutCafe/edit/{id}', 'about_cafeController@update');
Route::get('/aboutCafe/delete/{id}', 'about_cafeController@destroy');

# --- Chefs --- #

Route::get('/chefs', 'chefsController@index');
Route::get('/chefs/add', 'chefsController@create');
Route::post('/chefs/add', 'chefsController@store');
Route::get('/chefs/edit/{id}', 'chefsController@edit');
Route::post('/chefs/edit/{id}', 'chefsController@update');
Route::get('/chefs/delete/{id}', 'chefsController@destroy');

# --- Messages --- #

Route::get('/messages', 'messageController@index');
Route::get('/messages/add', 'messageController@create');
Route::post('/messages/add', 'messageController@store');
Route::get('/messages/edit/{id}', 'messageController@edit');
Route::post('/messages/edit/{id}', 'messageController@update');
Route::get('/messages/delete/{id}', 'messageController@destroy');


// Route::get('/messages/{id}', 'messageController@editR');
Route::get('/messages/{id}', 'messageController@read');

# --- Product --- #

Route::get('/product', 'productController@index');
Route::get('/product/add', 'productController@create');
Route::post('/product/add', 'productController@store');
Route::get('/product/edit/{id}', 'productController@edit');
Route::post('/product/edit/{id}', 'productController@update');
Route::get('/product/delete/{id}', 'productController@destroy');

# --- Category --- #

Route::get('/category', 'categoryController@index');
Route::get('/category/add', 'categoryController@create');
Route::post('/category/add', 'categoryController@store');
Route::get('/category/edit/{id}', 'categoryController@edit');
Route::post('/category/edit/{id}', 'categoryController@update');
Route::get('/category/delete/{id}', 'categoryController@destroy');

# --- Menu --- #

Route::get('/menu', 'menuController@index');
Route::get('/menu/add', 'menuController@create');
Route::post('/menu/add', 'menuController@store');
Route::get('/menu/edit/{id}', 'menuController@edit');
Route::post('/menu/edit/{id}', 'menuController@update');
Route::get('/menu/delete/{id}', 'menuController@destroy');

# --- Blog Page --- #

Route::get('/blog', 'blog_pageController@index');
Route::get('/blog/add', 'blog_pageController@create');
Route::post('/blog/add', 'blog_pageController@store');
Route::get('/blog/show/{id}', 'blog_pageController@show');
Route::get('/blog/edit/{id}', 'blog_pageController@edit');
Route::post('/blog/edit/{id}', 'blog_pageController@update');
Route::get('/blog/delete/{id}', 'blog_pageController@destroy');

# --- Blog Categories --- #

Route::get('/blogCategory', 'blog_categoryController@index');
Route::get('/blogCategory/add', 'blog_categoryController@create');
Route::post('/blogCategory/add', 'blog_categoryController@store');
Route::get('/blogCategory/show/{id}', 'blog_categoryController@show');
Route::get('/blogCategory/edit/{id}', 'blog_categoryController@edit');
Route::post('/blogCategory/edit/{id}', 'blog_categoryController@update');
Route::get('/blogCategory/delete/{id}', 'blog_categoryController@destroy');

# --- Role --- #

Route::get('/role', 'roleController@index');
Route::get('/role/add', 'roleController@create');
Route::post('/role/add', 'roleController@store');
Route::get('/role/show/{id}', 'roleController@show');
Route::get('/role/edit/{id}', 'roleController@edit');
Route::post('/role/edit/{id}', 'roleController@update');
Route::get('/role/delete/{id}', 'roleController@destroy');

# --- Users --- #

Route::get('/user', 'usersController@index');
Route::get('/user/add', 'usersController@create');
Route::post('/user/add', 'usersController@store');
Route::get('/user/show/{id}', 'usersController@show');
// Route::get('/user/edit/{id}', 'usersController@edit');
// Route::post('/user/edit/{id}', 'usersController@update');
Route::get('/user/delete/{id}', 'usersController@destroy');

Route::get('/edit-profil/{id}', 'usersController@editUser');
Route::post('/edit-profil/{id}', 'usersController@updateUser');

# --- Commands --- #

Route::get('/command', 'commandController@index');
Route::get('/command/add', 'commandController@create');
Route::post('/command/add', 'commandController@store');
Route::get('/command/show/{id}', 'commandController@show');
Route::get('/command/edit/{id}', 'commandController@edit');
Route::post('/command/edit/{id}', 'commandController@update');
Route::get('/command/delete/{id}', 'commandController@destroy');

# --- Reply Commands --- #

Route::get('/reply-command', 'reply_commandController@index');
Route::get('/reply-command/add/{blog_id}/{id}', 'reply_commandController@create');
Route::post('/reply-command/add/{id}', 'reply_commandController@store');
Route::get('/reply-command/show/{id}', 'reply_commandController@show');
Route::get('/reply-command/edit/{id}', 'reply_commandController@edit');
Route::post('/reply-command/edit/{id}', 'reply_commandController@update');
Route::get('/reply-command/delete/{id}', 'reply_commandController@destroy');


# --- Reply Commands --- #

 
Route::get('/send-telegram', 'TelegramBotController@sendMessage');
Route::post('/send-message', 'TelegramBotController@storeMessage');
Route::get('/send-photo', 'TelegramBotController@sendPhoto');
Route::post('/store-photo', 'TelegramBotController@storePhoto');
Route::get('/updated-activity', 'TelegramBotController@updatedActivity');