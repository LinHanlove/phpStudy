<?php

echo '<hr>';
/**
 * 时区 中国时区 PRC
 * date_default_timezone_set('PRC'); 设置时区
 * date_default_timezone_get(); 获取时区
 * date('Y-m-d H:i:s',time()); 获取当前时间  注意要改时区
 * time(); 获取当前时间戳
 * microtime (); 获取当前微妙
 */

  date_default_timezone_set('PRC');

  echo date_default_timezone_get();
  echo '<br>';

  echo date('Y-m-d H:i:s',time());

  echo '<br>';

  echo time();

  // 写一个脚本执行时间的函数

  function runTime($start=null,$end=null){
    //静态变量
    static $cahce = [];
    if(is_null($start)) {
      return $schce;
    }elseif(is_null($end)){
      $cahce[$start] = microtime(true);
    }else{
      $end = $cache[$end]?? microtime(true);
      return $end-$cahce[$start];
    }
  }

  runTime('for');
  for($i=0;$i<10000000;$i++){
    $i++;
  }

  runTime('forEnd');

  echo '<hr>'.runTime('for','forEnd');


  /**
   * date('Y-m-d H:i:s') 第二参数是计算过去
   * getdate(['year]); 获取时间节点
   */

   date_default_timezone_set('PRC');

   date('Y-m-d H:i:s');

   echo '<hr>';
   /**
    * iso 标准时间
    * Y-m-d H:i:s
    * strtotime() iso转时间戳
    */

    //2010-02-11

    echo strtotime('2010-02-11');

    echo '<hr>'.'获取当前时间戳';

    echo '<hr>';

    echo strtotime('now');

    echo '<hr>'.'一年后的时间'.strtotime('+1 year');