<?php

Route::get('/', [
    'uses' => 'DashboardController@index',
    'as' => 'dashboard',
]);
