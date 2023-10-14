<?php
/**
 * session 配置
 * session_unset();  清空session 
 * session_destroy();  销毁session
 * session_save_path();  查看/设置session保存路径 设置时要放在开始之前
 * session_name();  查看/设置session名称
 * session_id();  查看/设置session id
 */


 session_save_path('savePath');

// 开启session
session_start();

$_SESSION['web'] =  'Notion';

echo session_save_path();

print_r($_SESSION);

/**
 * 垃圾回收
 */