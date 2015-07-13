<?php

Route::get('/', [
    'as' => 'dashboard',
    function()
    {
        return view('dashboard');
    }
]);
