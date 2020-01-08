<?php

use function foo\func;

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/san-pham','CategoryController@getListProduct')->name('get.search.product');
Route::get('cua-hang','CategoryController@getListProduct')->name('get.list.all.product');
Route::get('danh-muc/{slug}-{id}','CategoryController@getListProduct')->name('get.list.product');


Route::get('san-pham/{slug}-{id}','ProductDetailController@getDetailProduct')->name('get.detail.product');

Route::post('san-pham/{slug}-{id}','ProductDetailController@saveRating')->middleware('CheckLogin');

Route::get('tin-tuc','ArticleController@getListArticle')->name('get.list.article');
Route::get('bai-viet/{slug}-{id}','ArticleDetailController@getDetailArticle')->name('get.detail.article');

Route::group(['namespace'=>'Auth'],function (){
    Route::get('dang-ki','RegisterController@getRegister')->name('get.register');
    Route::post('dang-ki','RegisterController@postRegister');

    Route::get('dang-nhap','LoginController@getLogin')->name('get.login');
    Route::post('dang-nhap','LoginController@postLogin');

    Route::get('dang-xuat','LoginController@getLogout')->name('get.logout.user');

});
Route::group(['prefix'=>'shopping'],function (){
    Route::get('/add/{id}','ShoppingCartController@addProduct')->name('add.shopping.product');
    Route::get('/delete/{id}','ShoppingCartController@deleteProduct')->name('delete.shopping.product');
    Route::get('/danh-sach','ShoppingCartController@getListShoppingCart')->name('get.list.shopping');
});
Route::group(['prefix'=>'gio-hang','middleware' => 'CheckLogin'],function (){
    Route::get('/thanh-toan','ShoppingCartController@getFormPay')->name('get.form.pay');
    Route::post('/thanh-toan','ShoppingCartController@saveInfoShoppingCart');
});

Route::group(['prefix'=> 'danh-gia','middleware' => 'CheckLoginUser'],function(){
    Route::get('danh-sach/{id}','RatingController@getRating')->name('get.list.rating.product');
});

Route::get('/{id}','ProductDetailController@viewProduct')->name('get.view.product');
Route::get('dieu-khoan-va-dieu-kien',function (){
    return view('term');
})->name('term.condition');
Route::get('ve-chung-toi',function (){
    return view('aboutUs');
})->name('about.us');

Route::get('lien-he','ContactController@getContact')->name('get.contact');
Route::post('lien-he','ContactController@saveContact');






