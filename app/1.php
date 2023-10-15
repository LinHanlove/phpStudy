<?php

/**
 * 自动加载
 * __autoload 7.6之前使用
 * 
 * 7.6之后使用
 * spl_autoload_register() 当我们使用一个类时，如果找不到，会自动调用这个函数
 */

 include '2.php';
//  Bootstrap::boot();

 User::make();
