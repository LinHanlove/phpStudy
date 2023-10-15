<?php

/**
 * 类的保护
 * 
 * private 私有的
 *
 */

 class Notify {
  public function () {
    return  'notify send';
  }

 }

 class User extends Notify{
  public function say(){
    return 'notion';
  }
 }

 $user = new User();
 echo $user->say();