<?php

use think\facade\Route;
 
Route::group('/', function() {
    Route::get('hello_test', 'Index/hello');
});

Route::miss(function () {
  echo '没找到正确的路哦！';
  exit; 
});
