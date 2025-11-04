<?php

namespace app\controller;

use app\BaseController;
use think\facade\Db;

class Index extends BaseController
{
    public function index()
    {
        $select =   Db::table('task')->select()->ToArray();
        print_r($select);
        return time();
    }

    public function hello($name = 'ThinkPHP8')
    {
        return 'hello,' . $name;
    }
}
