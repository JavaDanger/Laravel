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
//frontend route....................

Route::get('/home', 'HomeController@home');

Route::get('/', 'HomeController@index');
Route::get('/product-by-category/{category_id}', 'HomeController@show_products_by_category');
Route::get('/product-by-manufacture/{manufacture_id}', 'HomeController@show_product_by_manufacture');
Route::get('/view_product/{product_id}','HomeController@product_details');



//cart related routes are here.....
Route::post('/add-to-cart','CartController@add_to_cart');

Route::get('/show_cart','CartController@show_cart');
Route::get('/delete-to_cart/{rowId}','CartController@delete_to_cart');
Route::post('/update-cart','CartController@update_cart');


//checkout routes are here
Route::get('/login-check','CheckoutController@login_check');
Route::post('/customer-registration','CheckoutController@customer_registration');
Route::get('checkout','CheckoutController@checkout');
Route::post('/save-shipping-details','CheckoutController@save_shipping_details');
Route::post('/customer-login','CheckoutController@customer_login');
Route::get('/customer-logout','CheckoutController@customer_logout');


Route::get('/payment','CheckoutController@payment');
Route::post('/order-place','CheckoutController@order_place');

Route::get('/manage-order','CheckoutController@manage_order');
Route::get('/view_order/{order_id}','CheckoutController@view_order');
Route::get('/delete_order/{order_id}','CheckoutController@delete_order');
Route::get('/all-confirmed-order','CheckoutController@AllConfirmedOrder');
Route::get('/all-pending-order','CheckoutController@AllPendingOrder');




//backend route...............
Route::get('/admin','AdminController@index');
Route::get(md5('/dashboard'),'SuperAdminController@index')->name('/dashboard');
Route::post('/admin-dashboard','AdminController@view_dashboard');
Route::get('/logout','SuperAdminController@logout');

//category related route
Route::get(md5('/add-category'),'CategoryController@index')->name('admin.add-category');
Route::get(md5('/all-category'),'CategoryController@all_category')->name('admin.all-category');
Route::post('/save-category','CategoryController@save_category');
Route::get('/inactive_category/{category_id}','CategoryController@inactive_category');
Route::get('/active_category/{category_id}','CategoryController@active_category');
Route::get('/edit_category/{category_id}','CategoryController@edit_category');
Route::post('/update_category/{category_id}','CategoryController@update_category');
Route::get('/delete_category/{category_id}','CategoryController@delete_category');

//brand related route

Route::get(md5('/add-manufacture'),'ManufactureController@index')->name('admin.add-manufacture');
Route::post('/save-manufacture','ManufactureController@save_manufacture');
Route::get(md5('/all-manufacture'),'ManufactureController@all_manufacture')->name('admin.all-manufacture');
Route::get('/delete_manufacture/{manufacture_id}','ManufactureController@delete_manufacture');
Route::get('/inactive_manufacture/{manufacture_id}','ManufactureController@inactive_manufacture');
Route::get('/active_manufacture/{manufacture_id}','ManufactureController@active_manufacture');
Route::get('/edit_manufacture/{manufacture_id}','ManufactureController@edit_manufacture');
Route::post('/update_manufacture/{manufacture_id}','ManufactureController@update_manufacture');

//product routes arehere
Route::get(md5('/add-product'),'ProductController@add_product')->name('admin.add-product');
Route::post('/save-product','ProductController@save_product');
Route::get(md5('/all-product'),'ProductController@all_product')->name('admin.all-product');
Route::get('/inactive_product/{product_id}','ProductController@inactive_product');
Route::get('/active_product/{product_id}','ProductController@active_product');
Route::get('/delete_product/{product_id}','ProductController@delete_product');
Route::get('/edit_product/{category_id}','ProductController@edit_product');

Route::post('/update_product/{product_id}','ProductController@update_product');



//slider routes are here
Route::get(md5('/add-slider'),'SliderController@index')->name('admin.add-slider');
Route::post('/save-slider','SliderController@save_slider');
Route::get(md5('/all-slider'),'SliderController@all_slider')->name('admin.all-slider');
Route::get('/inactive_slider/{slider_id}','SliderController@inactive_slider');
Route::get('/active_slider/{slider_id}','SliderController@active_slider');
Route::get('/delete_slider/{slider_id}','SliderController@delete_slider');




//show all product frontend routes are here.....................
Route::get(md5('show-all-product'),'ProductController@show_all_product')->name('show-all-product');
Route::get('/view_single_product/{product_id}','ProductController@view_single_product');

//contact routes are here..............
route::get(md5('/add-contact'),'ContactController@AddContact')->name('add-contact');
route::post('/insert-contact','ContactController@InsertContact');
route::get(md5('/all-contact'),'ContactController@AllContact')->name('all-contact');
route::get('/delete-contact/{id}','ContactController@DeleteContact');
route::get('/view-contact/{id}','ContactController@ViewContact');

//suppliers routes are here............

route::get('add-supplier','SupplierController@AddSupplier');
route::post('/insert-supplier','SupplierController@InsertSupplier');
route::get('/all-supplier','SupplierController@AllSupplier');
route::get('/view-supplier/{suppliers_id}','SupplierController@ViewSupplier');
Route::get('/inactive_order/{order_id}','OrderController@inactive_order');
Route::get('/active_order/{order_id}','OrderController@active_order');
route::get('/contact','ContactController@v_contact');

//about routes are here..........
route::get(md5('about'),'AboutController@AboutContact')->name('about');
route::get('/single-contact/{id}','AboutController@SingleContact');


















