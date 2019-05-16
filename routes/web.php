<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('elem/header', function () {
    return view('elem.header');
});
Route::get('elem/content', function () {
    return view('elem.content');
});
Route::get('elem/footer', function () {
    return view('elem.footer');
});
Route::get('ver1', function () {
    return view('ver1.home');
});
Route::get('ver2', function () {
    return view('ver2.home');
});
Route::get('ver3', function () {
    return view('ver3.home');
});
