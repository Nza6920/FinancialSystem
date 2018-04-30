<?php
// 用户会话
Route::get('/login', 'SessionsController@showLogin')->name('login');
Route::post('login', 'SessionsController@login')->name('login');
Route::post('/logout', 'SessionsController@logout')->name('logout');

// 密码重置
Route::get('/reset', 'ResetPswController@showResetPsw')->name('resetPsw');
Route::post('reset', 'ResetPswController@resetPsw')->name('resetPsw');

// 系统功能
Route::get('/home/{user}','HomeController@show')->name('home.show');
