<?php

/**
 * 自定义的错误处理引擎
 */

 namespace Core;

 class Error
 {
  protected $debug;

  public function __construct($debug = true)
  {
    $this -> debug = $debug;
  }

  public function error()
  {
    // 默认关掉所有错误
    error_reporting(0);
    // 错误处理要显示当前类里面的handle方法，要显示那种错误
    set_error_handler([$this,'handle'],E_ALL | E_STRICT);
  }

  // 错误处理
  public function handle($code,$error,$file,$line)
  {
    $msg = $error . "($code)" . "($file)" . "($line)";
    // 处理错误级别
    switch($code)  
    {
      case E_NOTICE:
        if($this -> debug){
          echo $msg;

        }
        break;
        default :
        if ($this -> debug) {
          echo $msg;

        }else{
          #使用日志保存
          $file ='logs/' . date("Y_m_d") . '.log';
          // 使用log函数来进行记录  日期 + 错误消息 + 换行符 + 使用文件 + file
          error_log(date('[c]') . $msg . PHP_EOL , 3, $file);
        }
        die;
        break;
    }
  }

 }
