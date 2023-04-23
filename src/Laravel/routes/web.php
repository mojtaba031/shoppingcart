<?php
    Route::group(['namespace'=>'NiazPardaz\Sms\Controllers'], function (){
        Route::get('niazpardaz/sms/get','NiazPardazController@index');
    });
?>
