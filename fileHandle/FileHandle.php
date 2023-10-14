<?php

class FileHandle implements SessionHandlerInterface
{
  // 路径
  protected $path; //属性
  // 过期时间
  protected $maxlifetime;

  // 构造函数 new的时候会自动执行
  public function __construct($path='session',$maxlifetime=1440)
  {
      $this -> path = $this -> mkdir($path);
      echo $this -> path;
      $this -> maxlifetime = $maxlifetime;
  }

  protected function mkdir($path)
  {
    // 检测传入路径是否存在，不存在就创建
    is_dir($path) || mkdir($path, 0777, true);
    return realpath($path);
  }
  // 开
  public function close ()
  {
    return true;

  }
  // 卸
  public function destroy($id)
  {
    if (is_file($this -> path . '/' . $id)) {
     @unlink($this -> path . '/' . $id);
    }
    return true;

  }
  // 垃圾处理
  public function gc($maxlifetime)
  {
    foreach(glob($this -> path . '/*') as $file)
    {
      if(filemtime($file) + $maxlifetime < time())
      {
        @unlink($file);
      }
    }
    return true;
  }
  // 开
  public function open($path, $name)
  {
  
    return true;
  }
  // 读取
  public function read($id)
  {
    return (string)@file_get_contents($this -> path.'/'.$id);
  }
  // 写入
  public function write($id, $data)
  {
    return (bool)@file_put_contents($this -> path.'/'.id, $data);
  }

}