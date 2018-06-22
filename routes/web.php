<?php
// 重定向
Route::get('/', function(){
    return redirect()->route('login');
});

// 用户会话
Route::get('/login', 'SessionsController@showLogin')->name('login');   
Route::post('login', 'SessionsController@login')->name('login');
Route::post('/logout', 'SessionsController@logout')->name('logout');


// 密码重置
Route::get('/reset', 'ResetPswController@showResetPsw')->name('resetPsw');
Route::post('reset', 'ResetPswController@resetPsw')->name('resetPsw');

// 系统功能页面
Route::get('/home','HomeController@show')->name('home.show');

// 支出
Route::get('/createPay', 'PayController@show')->name('pay.show');
Route::post('createPay', 'PayController@create')->name('pay.create');
Route::get('/payList', 'PayController@showPayList')->name('pay.list');
Route::get('/payList/{pay}', 'PayController@showPay')->name('pay.one');
Route::get('/editPay/{pay}', 'PayController@edit')->name('pay.edit');
Route::put('payUpdate/{pay}' ,'PayController@update')->name('pay.update');
Route::delete('payDestory/{pay}' ,'PayController@destory')->name('pay.destory');

// 收入
Route::get('/createIncome', 'IncomeController@show')->name('income.show');
Route::post('createIncome', 'IncomeController@create')->name('income.create');
Route::get('/incomeList', 'IncomeController@showIncomeList')->name('income.list');
Route::get('/editIncome/{income}', 'IncomeController@edit')->name('income.edit');
Route::put('incomeUpdate/{income}', 'IncomeController@update')->name('income.update');
Route::delete('incomeDestory/{income}', 'IncomeController@destory')->name('income.destory');

// 收支便签
Route::get('/noteList', 'NoteController@showNoteList')->name('note.showNoteList');
Route::get('/createNote', 'NoteController@show')->name('note.show');
Route::post('createNote', 'NoteController@create')->name('note.create');
Route::put('noteUpdate/{note}', 'NoteController@update')->name('note.update');
Route::get('/editNote/{note}', 'NoteController@edit')->name('note.edit');
Route::delete('noteDestory/{note}', 'NoteController@destory')->name('note.destory');

// 图表控制器
Route::get('/incomeChart', 'ChartController@showIncome')->name('chart.showIncome');
Route::get('/payChart', 'ChartController@showPay')->name('chart.showPay');

// 静态页面
Route::get('/help', 'StaticPageController@showHelp')->name('static.help');
Route::get('/dataManage', 'StaticPageController@showData')->name('static.data');
