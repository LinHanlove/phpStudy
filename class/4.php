<?php
/**
 * 构造函数和析构方法
 * 
 * __set()  __get()
 * 
 */

 class Code {
// 告诉类怎么生成函数
  public function __construct() {
    echo "Code 构造函数\n";
  }

  public function code (){
    echo "Code 方法\n";
  }

  // 创建析构函数 
  // 告诉类怎么销毁函数
  // 析构函数在对象被销毁前调用
  // 析构函数不能有参数
  // 析构函数不能被继承
  // 析构函数不能被重载
  public function __destruct() {
    echo "Code 析构函数\n";
  }

 }


// 定义一个抽象类
abstract class Query {
  // 从数库查询 返回给模型
  abstract protected function record(array $data);

  public function select() {
    $this -> record([1,2,3]);
  }
}

class Model extends Query{
  protected $field = [];
  public function all(){
    // 执行查询，返回结果
    $this -> select();
    return $this -> field;
  }
  protected function record(array $data)
  {
    // 记录到属性里面
    $this -> field = $data;
  }

  public function __get($name) {
    if(isset($this -> field[$name])){
      return $this -> field[$name];
    }
    throw new Exception('属性不存在,参数错误 ');
  }

  public function __set($name, $value) {
    $this -> field[$name] = $value;
    return $this;
  }

 // 模式方法  当调用不存在方法时会自动调用call  
public function __call($name, $arguments){  
  
  $action = 'getAttribute'.$name;  
  echo  $action;  
  if(method_exists($this , $action)){    
    return call_user_func_array([$this , $action] , $arguments);  
  }  
}
// 魔术静态方法
public static function __callStatic($name, $arguments){
  switch ($name) {
    case 'getAll':
     return call_user_func_array([new static, 'all'], $arguments);
      break;
    
    default:
      # code...
      break;
  }
}
  

}

class User extends Model{

  protected function getAttributeMobile (int $len=9) {
    return substr($this -> field['mobile'],0,$len).'****';
  }

}

/**
 * 魔术方法
 */
try {
  
 $obj = new User(); 
 echo $obj -> all();

 echo $obj -> mobile();
  $obj -> aaa();
  


} catch (\Throwable $th) {
  echo $e->getMessage();
}
