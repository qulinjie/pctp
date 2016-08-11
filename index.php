<?php
// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');
define('DIR_SECURE_FILENAME', 'default.html');
//应用目录
define('APP_PATH','./Apps/');
//运行路径
define('RUNTIME_PATH','./Runtime/');
//开启调试
define('APP_DEBUG',true);
//设置安全目录文件名
//define('DIR_SECURE_FILENAME','default.html');
//设置安全目录文件开启
//define('BUILD_DIR_SECURE',false);
//入口文件目录
define('ROOT_PATH', str_replace("\\", "/", __DIR__));
//框架入口文件
require './ThinkPHP/ThinkPHP.php';
?>