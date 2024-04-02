<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::group([
    'prefix' => 'member',
    'namespace' => "\App\Http\Controllers",
    "middleware" => ['member']
], function () {
    Route::get('', 'DashboardController@member')->name('member');

    Route::get('payments', 'DashboardController@payments')->name('payments');
    Route::get('new-payment', 'DashboardController@new_payment')->name('new_payment');
    Route::post('new-payment', 'DashboardController@save_new_payment')->name('save_new_payment');

    Route::get('settings', 'DashboardController@settings')->name('settings');

    Route::get('notifications', 'DashboardController@notifications')->name('notifications');
    Route::get('mark-all-as-read', 'DashboardController@mark_all_as_read')->name('mark_all_as_read');
});

Route::group([
    'prefix' => 'admin',
    'namespace' => "\App\Http\Controllers",
    "middleware" => ['admin']
], function () {
    Route::get('', 'AdminDashboardController@dashboard')->name('admin');

    Route::get('payments', 'AdminDashboardController@payments')->name('admin_payments');
    Route::get('new-payment', 'AdminDashboardController@new_payment')->name('admin_new_payment');
    Route::post('new-payment', 'AdminDashboardController@save_new_payment')->name('admin_save_new_payment');

    Route::get('settings', 'AdminDashboardController@settings')->name('admin_settings');

    Route::get('notifications', 'AdminDashboardController@notifications')->name('admin_notifications');
    Route::get('mark-all-as-read', 'AdminDashboardController@mark_all_as_read')->name('admin_mark_all_as_read');
});

Route::post('/update-profile','\App\Http\Controllers\DashboardController@update_profile')->name('update_profile')->middleware('auth');

Auth::routes();

Route::get('/welcome', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home')
    ->middleware('check_auth');


Route::get('/t',function(){
});
