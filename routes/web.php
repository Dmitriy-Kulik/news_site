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
use App\News;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'admin'], function(){
    Route::get('/', 'AdminController@admin_panel')->name('admin.index');
    Route::resource('/categories', 'CategoryController', ['as' => 'admin']);
    Route::resource('/news', 'NewsController', ['as' => 'admin']);
    Route::resource('/users', 'UsersController', ['as' => 'admin']);
    Route::resource('/comments', 'CommentController', ['as' => 'admin']);
    Route::resource('/tags', 'TagController', ['as' => 'admin']);
    Route::resource('/tags', 'TagController', ['as' => 'admin']);
    Route::resource('/adverts', 'AdvertController', ['as' => 'admin']);
});

Route::group(['prefix' => 'moderator', 'namespace' => 'Admin', 'middleware' => 'moderator'], function(){
    Route::resource('/', 'CommentController', ['as' => 'admin.moderator']);
    Route::resource('/comments', 'CommentController', ['as' => 'admin.moderator']);
});


Route::get('/', 'HomepageController@index');
Route::get('/categories/news/{id?}', 'NewsController@index')->name('news');
Route::get('/categories/{id?}', 'CategoryController@index')->name('categories');
Route::get('/tag/{id?}', 'TagController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('');

Route::get('categories/news/api/write_count_reading/', 'Admin\WriteCountReadingController@write');
Route::get('categories/news/api/like/', 'Admin\LikeController@write');



//Route::group(['middleware' => 'auth'], function(){
//    //тут роуты для которых нужна авторизация
//    Route::get('/home/protected/user', 'UserController@index');
//
//    Route::group(['middleware' => 'admin', 'auth', 'moderator'], function(){
//
//        //тут роуты только для модератора + авторизация
//        Route::get('/home/protected/admin', 'AdminController@index');
//
//        Route::group(['middleware' => 'auth', 'moderator'], function(){
//
//            //тут роуты только для модератора + админа + авторизация
//            Route::get('/home/protected/admin', 'AdminController@index');
//        });
//    });
//});

//php artisan make:controller Admin/CategoryController --resource --model=Category
//php artisan make:controller Admin/UserController --resource --model=User
//php artisan route:list
//{{ method_field('PUT') }}

