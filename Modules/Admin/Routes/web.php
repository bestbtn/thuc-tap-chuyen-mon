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

Route::group(['prefix' => 'authenticate'],function (){
    Route::get('/login','AdminAuthController@getLogin')->name('admin.get.login');
    Route::post('/login','AdminAuthController@postLogin');

});
Route::prefix('admin')->middleware('CheckLoginAdmin')->group(function() {
    Route::get('/', 'AdminController@index')->name('admin.get.dashboard');
    Route::group(['prefix' => 'category'],function (){
        Route::get('/','AdminCategoryController@index')->name('admin.get.list.category');
        Route::get('/create','AdminCategoryController@create')->name('admin.get.create.category');
        Route::post('/create','AdminCategoryController@store');
        Route::get('/update/{id}','AdminCategoryController@edit')->name('admin.get.edit.category');
        Route::post('/update/{id}','AdminCategoryController@update');
        Route::get('/{action}/{id}','AdminCategoryController@action')->name('admin.get.action.category');

    });
    Route::get('/logout','AdminAuthController@getLogout')->name('admin.get.logout');
    Route::get('/profile','AdminAuthController@getProfile')->name('admin.get.profile');

    Route::group(['prefix' => 'product'],function (){
        Route::get('/','AdminProductController@index')->name('admin.get.list.product');
        Route::get('/create','AdminProductController@create')->name('admin.get.create.product');
        Route::post('/create','AdminProductController@store');
        Route::get('/update/{id}','AdminProductController@edit')->name('admin.get.edit.product');
        Route::post('/update/{id}','AdminProductController@update');
        Route::get('/{action}/{id}','AdminProductController@action')->name('admin.get.action.product');

    });
    //Quản lí đánh giá
    Route::group(['prefix' => 'rating'],function (){
        Route::get('/','AdminRatingController@index')->name('admin.get.list.rating');
        Route::get('/{action}/{id}','AdminRatingController@action')->name('admin.get.action.rating');

    });

    Route::group(['prefix' => 'article'],function (){
        Route::get('/','AdminArticleController@index')->name('admin.get.list.article');
        Route::get('/create','AdminArticleController@create')->name('admin.get.create.article');
        Route::post('/create','AdminArticleController@store');
        Route::get('/update/{id}','AdminArticleController@edit')->name('admin.get.edit.article');
        Route::post('/update/{id}','AdminArticleController@update');
        Route::get('/{action}/{id}','AdminArticleController@action')->name('admin.get.action.article');

    });
    //quan lý đơn hàng
    Route::group(['prefix' => 'transaction'],function (){
        Route::get('/','AdminTransactionController@index')->name('admin.get.list.transaction');
        Route::get('/view/{id}','AdminTransactionController@viewOrder')->name('admin.get.view.transaction');
        Route::get('/{action}/{id}','AdminTransactionController@action')->name('admin.get.action.transaction');



    });
    //quan lý thành viên
    Route::group(['prefix' => 'user'],function (){

        Route::get('/','AdminUserController@index')->name('admin.get.list.user');
        Route::get('/{action}/{id}','AdminUserController@action')->name('admin.get.action.user');

    });
});

