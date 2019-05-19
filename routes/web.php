<?php

Route::get('/', function () {
    return view('ver1.home');
});

Route::get('ver1', 'BoolController@getHome');

?>
