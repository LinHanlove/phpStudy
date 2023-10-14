<?php

/**
 * php内置的处理时间的类
 * DateTime DateInterval DateTimeZone
 */
date_default_timezone_set('PRC');

//  $dateTime = new DateTime();
//  print_r($dateTime);
//  echo '<br>';

 /**
  * 计算两个时间的差
  */

  $dateNew1 = new DateTime();

  $dateNew2 = new DateTime('2019-02-12 03:25:36');

  // 时间差
  $interval = $dateNew1->diff($dateNew2);

  $format = '我们已经在一起%a天%h小时%i分钟%s秒啦~~~~';

  echo $interval->format($format);

  // 增加
  $dateTime = new DateTime();
  $interval1 = new DateInterval('P1Y2DT2H');
  $dateTime->add($interval1);
  echo '<hr>'.$dateTime->format('Y-m-d H:i:s');

  // 减少
  $dateTime->sub($interval1);
  echo '<hr>'.$dateTime->format('Y-m-d H:i:s');