<?php

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::get('/' , 'HRController@index');
    Route::get('all-employees' , 'HRController@AllEmployees');
    Route::get('shifts' , 'HRController@showShifts');
    Route::get('create-shift' , 'HRController@createShift');
    Route::get('edit-shift/{id}' , 'HRController@editShift');
    Route::post('save-edit-shift' , 'HRController@saveEditShift');
    Route::get('attendance' , 'HRController@showAttendance');
    Route::get('show-attendance' , 'HRController@getAttendance');
    Route::post('save-shift' , 'HRController@saveShift');
    Route::get('assign-shifts' , 'HRController@assignShifts');
});

