<?php

// 连接数据库
header('Content-Type:text/html;charset=utf-8');
$config = [
  'host' => '127.0.0.1',
  'user' => 'linhan',
  'password' => '123456',
  'database' => 'notion' ,
  'charset' => 'utf8'
];

$dsn =sprintf(
  "mysql:host=%s;dbname=%s;charset=%s",
  $config['host'],
  $config['database'],
  $config['charset']
);


try {
  $pdo =  new PDO($dsn, $config['user'], $config['password'],
  [PDO::ATTR_ERRMODE => PDO::ERRMODE_SILENT]);  

  // 添加
//  echo  $pdo->exec("INSERT INTO user (name,age,password) VALUE('卢文斌',8,123456)");
  //更新
  // $pdo->exec("UPDATE user SET name='旦旦' WHERE age>5");

  // 删除
  // $pdo->exec("DELETE FROM user WHERE age<10");

  // 获得自增组件
  // echo $pdo->lastInsertId();

  // 查询语句
  // 万一字段有驼峰命名，我们可以使用自定义属性 统一修改返回显示
  $pdo -> setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
  
  // 对于返回结果的设置
  $pdo -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC );
  
  $query = $pdo->query("SELECT * FROM user");
  // 循环输出
  while ($field = $query->fetch()) {
    echo sprintf("<span style='color:red'>姓名 </span>:%s\t<span style='color:red'>年龄 </span>: %s <br>",$field['name'],  $field['age']);
  }

  // 获取所有数据
  $result = $query->fetchAll();
  print_r($result);

} catch (PDOException $e) {
  die($e->getMessage());
}