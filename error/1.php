<?php
/**
 * 错误处理类型
 * 语法错误 -- 语法分析 ---执行错误 
 * 
 * 逻辑错误
 * 
 * @ 忽略错误
 */


//  处理警告和编译时的错误都显示
 error_reporting(~E_WARNING & ~E_COMPILE_ERROR);