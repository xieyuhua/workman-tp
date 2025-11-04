<?php

use think\facade\Route;
 
Route::group('/', function() {
    Route::post('test', 'Index/hello');
});

Route::miss(function () {
  echo '没找到正确的路哦！';
  exit; 
});
