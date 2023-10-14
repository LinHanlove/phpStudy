<?php
/**
 * 正则表达式
 * preg_match 匹配
 */

 $status = preg_match('#^[\d]{6}$#', '123456');
 var_dump($status);