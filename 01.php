<?php
echo "Hello World!";

/**连等赋值*/
$a = $b = 1;
echo $a;

$arr = [1,12]; 
echo '数组->',$arr[0],'<br>';


// 深拷贝
$deep1 = 2;
$deep2 = &$deep1;
echo '深拷贝前->',$deep1,$deep2,'<br>';
$deep1 = 3;
echo '深拷贝后->',$deep1,$deep2,'<br>';

// 可变变量
$notion = 'hello';
$$notion = 'linhansong.top';
echo '可变变量',$notion,'<br>';
echo '可变变量',$hello,'<br>';

// 超全局变量


var_dump($_GET);//接受地址栏传参

echo '<br>';
// 使用global将局部变量传递到函数作用域

$name = 'linhansong';

function getName (){
  global $name;
  echo $name ,'使用global将局部变量传递到函数作用域','<br>' ;
  echo $GLOBALS['name'],'使用GLOBALS','<br>';
}
getName();


/**
 * var_dump 检测变量类型
 * isset 检查变量是否定义
 * unset 删除变量
 * empty 检查变量是否为空
 * 函数体内unset不了global导入的全局变量
 */

 var_dump(isset($ed));


//  静态变量

function make()  {
  // 加上static关键字，函数调用后，静态变量不会被销毁,意味着该语句只在第一次被执行
  // 在函数体内做数据持久化
   
 static $num = 1;
  $num = $num +2;
  return '<br>'. $num.'<hr/>';
};

echo make();//此时无论函数调用多少次，num都时从初始值计算
echo make();
echo make();

// 八进制转十进制函数
echo octdec(777);
// 十六进制转十进制函数
echo hexdec(777);

$flag = false;
if(!$flag){
  echo '<br>'.'flag为假'.'<br>';
}

echo "hello {$a}";


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