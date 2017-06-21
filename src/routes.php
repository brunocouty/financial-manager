<?php

Route::group(
    [
        'prefix' => 'financial',
    ],
    function () {
        Route::get('', ['as' => 'financial-manager.home','uses' => '\BrunoCouty\FinancialManager\Controllers\FinancialManagerController@index']);
    });