<?php
/**
 * 命名空间 解决重名问题
 * 
 * 函数和常量在命名空间的特殊性
 */

 namespace App;

class User{
   public static function make(){
       return 'make';
   }
}