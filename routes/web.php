<?php

Route::get('/', function () {
    return view('ver1.home');
});

Route::get('ver1', function () {
    return view('ver2.home');
});
Route::get('ver2', 'BoolController@getHome');

?>
