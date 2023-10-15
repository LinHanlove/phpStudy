<?php
namespace Database;
use PDO;

/**
 * 查询生成器
 */

 class DB {
  protected $link;

  /**传入一个配置文件数组*/
  public function __construct(array $config) {
    print_r($config);
    $this->connect($config);
  }

  protected function connect(array $config)
  {
    $dsn =sprintf(
      "mysql:host=%s;dbname=%s;charset=%s",
      $config['host'],
      $config['database'],
      $config['charset']
    );

   $this -> link = new PDO($dsn, $config['user'], $config['password'],
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_SILENT]);  
  }


  public function query(string $sql, array $vars)
  // 预准备
  {
    $sth =  $this -> link  -> prepare($sql);
    $sth -> execute($vars);
    return $sth -> fetchAll();
  }

 }