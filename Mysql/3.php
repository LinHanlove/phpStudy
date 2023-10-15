<?php

include 'DB.php';
use Database\DB;

$config = [
  'host' => '127.0.0.1',
  'user' => 'linhan',
  'password' => '123456',
  'database' => 'notion' ,
  'charset' => 'utf8'
];

try {
  $db = new DB($config);
  $result=  $db->query('SELECT * FROM user WHERE age > :age',[':age' => $_GET['age']]);
  print_r($result);
} catch (Exception $e) {
  die($e.getMessage());
}