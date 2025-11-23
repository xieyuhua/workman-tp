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
        var_dump(__CLASS__);
        return time();
    }

    public function hello($name = 'ThinkPHP6666')
    {
        return 'hello,' . $name;
    }
}
