<?php

Route::get('/', function () {
    return view('ver1.home');
});

Route::get('ver1' ,  function() {

  return view('ver3.home');
})->name('ver1');

?>
