<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\facade\Route;

//  0.0.0.0:8486/erpapi/hello/452454
Route::group('erpapi', function() {
  // --- erp商品资料更新
//   Route::post('updateSkuInfo', 'Goods/updateSkuInfo');
  Route::get('hello/:name', 'index/hello');
});

// 0.0.0.0:8486/thinks/demo
Route::get('thinks/demo', function () {
    return 'hello,ThinkPHP888!';
});

// hello
Route::get('hello/:name', 'shop/index/hello');






