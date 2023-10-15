<?php

/**
 * 类
 * public 公共接口
 * private 私有接口
 */

 class Uploader {
  private $dir;
  public function upload():array
  {
    // 上传成功的文件
    $successFiles = [];
    $this->makeDir();
    $files = $this->format();
    print_r($files);
    foreach($files as $filed ) {
      if ($filed['error'] == 0) {
        // 判断是否为上传文件
        if (is_uploaded_file($filed['tmp_name'])) {
          pathinfo($filed['name']);
          // 修改名称
          $to =$this->dir .'/' . time() . mt_rand(1,999). '.' .pathinfo($filed['name'])['extension'];
          // 移动文件
          if(move_uploaded_file($filed['tmp_name'],$to)){
            $successFiles[] = [
              'path' => $to,
              'size' => $filed['size'],
              'name' => $filed['name'],
            ];
          }
        }
      }
    }
   return $successFiles;
  }
  // 创建上传目录
  private function makeDir():bool{
    // 创建文件夹
    $path = 'uploads/'.date('y/m');
    // 逻辑运算符短路特性 
    // 1. 左边为假，右边不执行  
    // 2. 左边为真，右边执行
    $this->dir = $path;
    // mkdir() 函数创建目录
    return is_dir($path) or  mkdir($path,0777,true);
     
  }
 
  private function format():array
  {
    $files = []; //存放格式化后的数据
    foreach ($_FILES as $filed) 
    {
      if (is_array($filed['name'])) {
        foreach ($filed['name'] as $id => $file) {
          $files[] = [
            'name' => $filed['name'][$id],
            'type' => $filed['type'][$id],
            'tmp_name' => $filed['tmp_name'][$id],  
            'error' => $filed['error'][$id],  
            'size' => $filed['size'][$id]
          ];
        }
      }else{
         $files[] = $filed;
      }

    }
    return $files;
  }
 }


