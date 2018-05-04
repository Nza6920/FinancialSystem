<?php
// 重定向
Route::get('/', function(){
    return redirect()->route('login');
});

// 用户会话
Route::get('/login', 'SessionsController@showLogin')->name('login');
Route::post('login', 'SessionsController@login')->name('login');
Route::post('/logout', 'SessionsController@logout')->name('logout');

<<<<<<< Updated upstream
// 密码重置
Route::get('/reset', 'ResetPswController@showResetPsw')->name('resetPsw');
Route::post('reset', 'ResetPswController@resetPsw')->name('resetPsw');

// 系统功能页面
Route::get('/home','HomeController@show')->name('home.show');

// 支出
Route::get('/createPay', 'PayController@show')->name('pay.show');
Route::post('pay', 'PayController@create')->name('pay.create');
Route::get('/payList', 'PayController@showPayList')->name('pay.list');
Route::get('/payList/{pay}', 'PayController@showPay')->name('pay.one');
Route::get('/editPay/{pay}', 'PayController@edit')->name('pay.edit');
Route::post('update/{pay}' ,'PayController@update')->name('pay.update');
Route::post('destory/{pay}' ,'PayController@destory')->name('pay.destory');
=======
Route::get('/', function () {
    return view('help');
});
>>>>>>> Stashed changes
