<?php

namespace app\shop\controller;

use app\BaseController;
use think\facade\Db;

class Index extends BaseController
{
    public function index()
    {
        $select =   Db::table('login_log')->select()->ToArray();
        print_r($select);
        var_dump(__CLASS__);
        return time();
    }

    public function hello($name = 'ThinkPHP shop')
    {
        return 'hello,' . $name;
    }
}
