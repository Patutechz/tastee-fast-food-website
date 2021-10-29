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
Auth::routes();

Route::group(['prefix' => 'admin' ,'namespace' => 'admin','middleware' => 'auth'],function () {
    //products routes
    //Route::resource('products', 'ProductController');
    Route::get('products', 'ProductController@index')->name('admin.products.index');
    Route::post('/products', 'ProductController@store')->name('admin.products.store');
    Route::get('/products/create', 'ProductController@create')->name('admin.products.create');
    Route::delete('/products/{product}', 'ProductController@destroy')->name('admin.products.destroy');
    Route::put('/products/{product}', 'ProductController@update')->name('admin.products.update');
    Route::get('/products/{product}', 'ProductController@show')->name('admin.products.show');
    Route::get('/products/{product}/edit', 'ProductController@edit')->name('admin.products.edit');

    //employees routes
    Route::get('employees', 'employeeController@index')->name('admin.employees.index');
    Route::post('/employees', 'employeeController@store')->name('admin.employees.store');
    Route::get('/employees/create', 'employeeController@create')->name('admin.employees.create');
    Route::delete('/employees/{employee}', 'employeeController@destroy')->name('admin.employees.destroy');
    Route::put('/employees/{employee}', 'employeeController@update')->name('admin.employees.update');
    Route::get('/employees/{employee}', 'employeeController@show')->name('admin.employees.show');
    Route::get('/employees/{employee}/edit', 'employeeController@edit')->name('admin.employees.edit');

    //customers routes
    //Route::resource('customers', 'customerController');
    Route::get('customers', 'customerController@index')->name('admin.customers.index');
    Route::post('/customers', 'customerController@store')->name('admin.customers.store');
    Route::get('/customers/create', 'customerController@create')->name('admin.customers.create');
    Route::delete('/customers/{customer}', 'customerController@destroy')->name('admin.customers.destroy');
    Route::put('/customers/{customer}', 'customerController@update')->name('admin.customers.update');
    Route::get('/customers/{customer}', 'customerController@show')->name('admin.customers.show');
    Route::get('/customers/{customer}/edit', 'customerController@edit')->name('admin.customers.edit');

    //order routes
    Route::get('orders', 'OrderController@index')->name('admin.orders.index');
    Route::delete('orders/{order}', 'OrderController@destroy')->name('admin.orders.destroy');
    Route::put('orders/{order}/deliver', 'OrderController@deliver')->name('admin.orders.deliver');
    Route::put('orders/{order}/pend', 'OrderController@pend')->name('admin.orders.pend');
    Route::put('orders/{order}/cancel', 'OrderController@cancel')->name('admin.orders.cancel');


    Route::get('users', 'UserController@index')->name('admin.users.index');
    Route::get('/', 'HomeController@index')->name('dashboard');
});


//order route
Route::post('/orders', 'orderController@store')->name('orders.store');
