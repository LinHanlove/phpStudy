<?php


/**
 * cookie操作
 * setcookie 存cookie 
 * $_COOKIE 取cookie
 */

// 有过期时间
setcookie('name', 'linhan', time() + 15);
print_r($_COOKIE);

/**
 * cookie的生命周期
 * 第四个参数表示路径
 */