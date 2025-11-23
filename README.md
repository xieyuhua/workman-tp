ThinkPHP 8
===============

## 特性

* 基于PHP`8.0+`重构
* 升级`PSR`依赖
* 依赖`think-orm`3.0+版本
* 全新的`think-dumper`服务，支持远程调试
* 支持`6.0`/`6.1`无缝升级


## 安装

~~~
composer create-project topthink/think tp
cd tp
composer require topthink/think-worker
composer require topthink/think-multi-app
composer require  topthink/think-queue
composer require  topthink/think-annotation
composer require  php-jwt


[root@VM-16-5-centos tp]# php think work
------------------------------------------------------------- WORKERMAN --------------------------------------------------------------
Workerman/5.0.1         PHP/8.2.27 (Jit on)           Linux/3.10.0-1160.105.1.el7.x86_64
-------------------------------------------------------------- WORKERS ---------------------------------------------------------------
event-loop  proto       user        worker         listen                                                count       state            
revolt      tcp         root        http server    none                                                  4            [OK]            
revolt      unix        root        conduit        unix:///www/php/think-work/tp/runtime/conduit.sock    1            [OK]            
revolt      tcp         root        hot update     none                                                  1            [OK]            
--------------------------------------------------------------------------------------------------------------------------------------
Press Ctrl+C to stop. Start success.


[root@VM-16-5-centos ~]# lsof -i:3306
COMMAND   PID  USER   FD   TYPE   DEVICE SIZE/OFF NODE NAME
mysqld  20765 mysql   28u  IPv6 72423002      0t0  TCP *:mysql (LISTEN)

mysqld  20765 mysql   69u  IPv6 86354738      0t0  TCP VM-16-5-centos:mysql->VM-16-5-centos:33130 (ESTABLISHED)
mysqld  20765 mysql   72u  IPv6 86354777      0t0  TCP VM-16-5-centos:mysql->VM-16-5-centos:33156 (ESTABLISHED)
mysqld  20765 mysql   73u  IPv6 86355143      0t0  TCP VM-16-5-centos:mysql->VM-16-5-centos:33158 (ESTABLISHED)
mysqld  20765 mysql   74u  IPv6 86355144      0t0  TCP VM-16-5-centos:mysql->VM-16-5-centos:33160 (ESTABLISHED)

php     22339  root   10u  IPv4 86355142      0t0  TCP VM-16-5-centos:33156->VM-16-5-centos:mysql (ESTABLISHED)
php     22340  root   10u  IPv4 86355007      0t0  TCP VM-16-5-centos:33130->VM-16-5-centos:mysql (ESTABLISHED)
php     22341  root   10u  IPv4 86354786      0t0  TCP VM-16-5-centos:33160->VM-16-5-centos:mysql (ESTABLISHED)
php     22342  root   10u  IPv4 86354783      0t0  TCP VM-16-5-centos:33158->VM-16-5-centos:mysql (ESTABLISHED)

~~~


启动服务

~~~
cd tp
php start.php worker
~~~



然后就可以在浏览器中访问

~~~
http://localhost:8000
~~~

如果需要更新框架使用
~~~
composer update topthink/framework
~~~

## 命名规范

`ThinkPHP`遵循PSR-2命名规范和PSR-4自动加载规范。

## 参与开发

直接提交PR或者Issue即可

## 版权信息

ThinkPHP遵循Apache2开源协议发布，并提供免费使用。

本项目包含的第三方源码和二进制文件之版权信息另行标注。

版权所有Copyright © 2006-2024 by ThinkPHP (http://thinkphp.cn) All rights reserved。

ThinkPHP® 商标和著作权所有者为上海顶想信息科技有限公司。

更多细节参阅 [LICENSE.txt](LICENSE.txt)
