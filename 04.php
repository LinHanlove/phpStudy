<?php

/**
 * 函数
 * 函数的命名空间  使用namespace将文件隔离，使得同名函数不冲突,使用时+ 命名\
 */


include './fun/model.php';
include './fun/user.php';


echo User\mark();
echo Model\mark();

/**
 * 传参
 * 传值 传址&
 * 传值不会改变外部变量 ， 传址共用一块内存地址
 * 参数扩展 ...
 * 参数默认值 
 */

function mobile($tel) {
   return substr($tel,0,-4).'****';
}

echo mobile('13993841298').'<br>';

/**
 * 参数的类型约束
 * 严格模式  declare
 */

function int(int $num) {
  return $num;
}

var_dump(int('0'));

/**
 * 函数返回值的类型约束
 */

 function sum():int {
  return 33;
 }
 echo sum();

 /**
  * 变量函数
  */

  $file = 'lin.png';
  $ext = trim(strrchr($file,'.'),'.');
  $action = strtolower($ext);
  echo($action).'<br>';

  function jpg()  {
    return 'jpg function';
  }

  function png() {
    return 'png function';
    
  }

  if (function_exists($action)) {
    echo $action($file);
    echo $action('jpg');

  }else {
    echo '函数不存在，系统不能处理此类型';
  }
  
  /**
   * 递归函数
   * 阶乘
   */

   function recursive(int $num) :int  {
    //3 * (2 *1)
    // 出口
    if ($num == 1) {
      return $num ;
    }
    return $num * recursive($num-1);
   }
   echo '<hr>'.'阶乘';
  echo '<hr>'.recursive(2);
  echo '<hr>'.recursive(18);