<?php

Route::get('/', function () {
    return view('ver1.home');
});

Route::resource('ver1', 'BoolController');

?>
