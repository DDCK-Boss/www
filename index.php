<?php
/*
 * 框架入库文件：
 * 1、定义常量
 * 2、引入函数库
 * 3、启动框架
 * */
//设置文件编码格式【防止乱码输出】
header("content-type:text/html;charset=UTF-8");

//当前框架所在的目录【项目根目录】
define('LTY',realpath('./'));

//框架核心文件的目录 【函数库】
define('CORE',LTY.'/core');

//项目应用目录 【项目代码补充目录】
define('APP',LTY.'/app');

//调试模式的状态 【代码报错 true:开启 false:关闭】
define('DEBUG',true);
//ini_set() 动态修改 配置文件配置参数; display_error是PHP配置文件php.ini中的"调试模式"配置
DEBUG ? ini_set('display_error','On') : ini_set('display_error','Off');

//加载函数库
include CORE."/common/function.php";

//
include CORE."/lty.php";

lty::run();
echo "<hr>";
lty::a();

?>