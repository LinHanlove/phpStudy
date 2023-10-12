<?php

/**
 * 缓存
 */

 function cache(string $name ,array $data=null){
  //系统分隔符
  
  $file = 'cache'.DIRECTORY_SEPARATOR.md5($name).'.php';
  if(is_null($data)){
    // 取缓存
    $content = is_file($file)?file_get_contents($file):null;
    return unserialize($content);
  }else{
    // 存缓存
    return file_put_contents($file,serialize($data));
  }
  

 }

 $config = include 'database.php';
 cache('database',$config);