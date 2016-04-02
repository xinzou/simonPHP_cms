<?php
define("APP_PATH", dirname(__DIR__));
require APP_PATH . '/vendor/autoload.php';
defined('APPLICATION_ENV') || define('APPLICATION_ENV', 'development');
// 导入自定义函数
require APP_PATH . '/app/lib/func.inc.php';
staticRequest();//静态请求过滤
\boot\Bootstrap::start();//启动应用