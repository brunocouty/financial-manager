<?php

Route::group(['prefix' => 'financial', 'middleware' => 'auth', 'as' => 'financial-manager.'],
    function () {
        Route::get('', [
            'as' => 'home',
            'uses' => '\BrunoCouty\FinancialManager\Controllers\FinancialManagerController@index'
        ]);
        Route::group(['prefix' => 'category', 'as' => 'category.'], function () {
            Route::get('', [
                'as' => 'load',
                'uses' => '\BrunoCouty\FinancialManager\Controllers\CategoriesController@load'
            ]);
            Route::post('', [
                'as' => 'save',
                'uses' => '\BrunoCouty\FinancialManager\Controllers\CategoriesController@save'
            ]);
            Route::delete('', [
                'as' => 'delete',
                'uses' => '\BrunoCouty\FinancialManager\Controllers\CategoriesController@delete'
            ]);
        });
    });