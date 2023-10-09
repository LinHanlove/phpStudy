<?php
/**
 * 文件引入
 * include 文件包含函数 不阻塞
 * @ 忽略报错
 * require 文件包含函数 强加载 阻塞 没有此类文件或目录致命错误
 * 
 * include_once 保证只加载一次
 * require_once 保证只加载一次
 */



//  include './1.html';
//  require './1.html';

include './fun/show.php';
echo show();