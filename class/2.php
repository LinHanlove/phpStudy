<?php

/**
 * 变相的多重继承
 * 使用trait定义多个类，use使用这些类 可以子类之间嵌套继承
 * 
 * 如果继承的多个类里面由同名的方法
 * 我们可以使用 insteadof 前者替换调后者 
 */

 trait Log {
  public function save(){

    return __METHOD__; //返回常量
  }
 }

 trait Comment {
  public function save ()
  {
    return __METHOD__;
  }
 }

 class Topic {
  use Log ,Comment{
    // 使用 insteadof 前者替换调后者 
    Log::save insteadof Comment;
    // 别名 私有
    Comment::save as protected LogSave;
  }
 }

 $topic = new Topic();

 echo $total = $topic->save();
