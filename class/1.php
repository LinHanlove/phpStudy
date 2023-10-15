<?php

/**
 *----------- 学习类的概念
 * 公共属性 -> 静态属性  由对象 :：调用
 * self 表示当前类，可以调用静态方法
 * 公共方法 -> 静态方法
 * 静态方法里面拿不到$this指针  使用self
 * 
 * 类常量 作用域只属于类
 * 类常量 只能用类名调用
 * 
 * 
 * ----------继承
 * 
 * extends 继承父类
 * 可以定义同名方法重写父类方法
 * final 禁止子类重写
 * 抽象类
 *  
 * 
 * --------接口 定义规范
 * 
 * --------调用父类方法
 * parent::父类方法
 * 
 * --------优先级的概念
 * 
 * 
 */




 class User {

  protected $name;

  protected static $lesson = 'PHP';

  // 类常量


  const NAME = 'notion';


    // new 的时候就会自动调用_construct
     public function __construct() {
         echo "User 对象被创建<br>";
     }

     public function say() {
        
        return 'notion'.User::$lesson;
     }

     public function setName(string $name) {
        return  $this -> name = $name;
     }

    //  静态方法
     public static function getLesson() {
        return self::$lesson;
     }

 }


class Comment extends Notify {

  protected $credit = 10;

  public function send(){
    return  $this -> message().'奖励notion作者'  . $this -> credit() . '积分'  ;
  }

  public function content()
  {
    return 'notion';
  }
}


// 定义成为抽象类
abstract class Notify {

  // 抽象方法 没有方法体
  // 抽象方法必须被子类实现
  // 抽象方法不能有方法体
  // 抽象方法必须定义在抽象类中
  // 抽象方法必须被实现
  public abstract function content();

  public function message () {
    return '发送通知消息' . $this -> content();
  }

  public function credit() {
    return 3;
  }
}

 // 接口
 interface UserInterface {
  public function set();
  public function get();
 }


 class Mysql implements UserInterface {


  public function set() {
    echo 'set mysql';
  }

  public function get() {
    echo 'get mysql';
  }

 }


 $obj = new User();

 echo $obj->say();

 echo $obj -> setName('linhan');

 echo '<hr>';

 echo User::getLesson();

 echo '<hr>';

 echo User::NAME;

 echo '<hr>';

 $com = new Comment();

 echo $com->send();

