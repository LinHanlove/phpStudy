<?php
echo "Hello World!";


/**
* 常量 define  
* 常量名  常量值  true or false常量名区分大小写 
* 常量不受访问限制没有作用域


 * 字符串定界符 - 定界符里面可以写任何内容，前后不能有空格
 * 单引号和双引号都可以
 * 字符串连接  .
 * 字符串转义  \
 * 字符串长度  strlen()
 * 字符串截取  substr()
 * 去除空格    trim() 第二个参数是删除的列表(要删除的字符串)  rtrim() ltrim
 * 字符串替换  str_replace()
 * 转大小写    strtoupper() strtolower()
 * 首字母大写  ucfirst()
 * 首字母小写  lcfirst()
 
 * 字符串分割  explode()
 * 字符串拼接  implode()
 * 字符串转义  htmlentities()
 * 字符串转义  html_entity_decode()
 * 字符串转义  htmlspecialchars()
 * 字符串转义  htmlspecialchars_decode()
 * 字符串转义  strip_tags()
 * 字符串转义  str_ireplace()
 * 字符串合并  implode()
 * 
 * 
 * 生成32位加密字符 md5() 哈希
 * 拆分 explode() == split   
 * 
 */

$str =  <<<php
<h1 style="color:teal">Notion - linhan.top</h1>
php;

echo $str;

echo strlen($str).'字符串长度'."<br>";

$strSub = substr($str,0,6);

echo  $strSub.'字符串长度'."<br>";

echo md5('linhansong.top').'加密字符串'."<br>";

$strEx = (explode('.','linhan.top'));

echo $strEx[0].'分割字符串'."<br>";

$arr = ['lin','han', 'song'];


$strCon = implode('.',$arr);

echo $strCon.'合并字符串'."<br>";

echo substr($strCon,0,6).'截取字符串'."<br>"; 

define('NAME','林寒');

define('ARR',[1,2,3,4,4]);

echo NAME.ARR[0].'定义常量'."<br>";

const AGE = 18;

echo AGE.'定义常量'."<br>";