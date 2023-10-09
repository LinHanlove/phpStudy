<?php
/**
 * 运算符
 * 算术运算符 +
 * 比较运算符 ==
 * 逻辑运算符 &&
 * 赋值运算符 =
 * 递增/递减运算符 ++
 * 运算符优先级
 */
$a = 10;
const B = 20;

 echo $a+B.'算术符'.'<br>';
$a++;
 echo $a ,'算术符'.'<br>';

/**
 * 流程控制
 * if else
 * for while
 * switch case break default
 */


 /**
  * 循环
  * for while
  */

$a =1 ;
while($a<10){
  echo $a.'<br>';
  $a++;
};

for($i=0;$i<10;$i++){
  echo $i.'<hr>';
}

do{
  if ($num>10) {
    return;
  };
  if(!isset($num)){
    $num = 1;
  };
  echo $num++.'<br>';
}while (true) ;