<?php

/**
 * 常用的数学函数 
 * ceil() 向上取整
 * floor() 向下取整
 * round() 四舍五入
 * max()
 * min()
 * mt_rand() 随机数
 *  
 */

echo ceil(3.45);

echo '<hr>';

echo mt_rand(1, 100);


echo '<hr>'.'验证码:';

// 验证码
function code(int $len=5):string
{
  $str = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
  $code ='';
  // 随机生成5个数
  for ($i=0; $i <$len ; $i++) { 
    $index = mt_rand(0,strlen($str)-1);
    // 注意拼接
    $code .= $str[$index];
  };
  return strtoupper($code);
}

echo code(5);

echo '<hr>'.'分页器';

$total = 100;
echo min($total,max(1,$_GET['page']??1));