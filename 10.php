<?php
/**
 * 数组函数  
 * array_key_exists() 判断数组中是否存在指定的键名
 * array_keys() 返回数组中所有键名
 * array_values() 返回数组中所有值
 * array_unique() 删除数组中的重复的值
 * array_merge() 合并两个或多个数组
 * array_merge_recursive() 递归合并数组
 * array_shift() 删除数组中第一个元素并返回被删除的元素的值
 * array_unshift() 在数组开头插入一个或多个元素
 * array_push() 在数组末尾插入一个或多个元素
 * array_pop() 删除数组中的最后一个元素
 * array_slice() 截取数组中的一部分
 * array_splice() 删除数组中的一段元素，并返回删除的元素
 * array_reverse() 反转数组中的元素
 * array_rand() 随机返回数组中的一个或多个单元的键名
 * in_array() 判断一个值是否在数组中 
 * array_diff() 比较数组，返回两个数组中不相同的值
 * array_walk_recursive 递归数组成员并操作
 * var_export 返回数组完整结构
 */
echo'<hr>';
$arr1 =['jpg','png','txt'];

$file = 'test.txt';

$ext = strtolower(substr(strrchr($file,'.'),1));

echo $ext;

if (in_array($ext,$arr1)) {
  echo '文件类型正确';
}else{
  echo '文件类型错误';
}

/**
 * array_filter() 过滤数组中的单元
 * array_map 
 */
$arr = [1,2,3,4,5,6,7,8,9,10];

$arr1 = array_filter($arr,function($v){
  return $v<6;
});

$arrMap = array_map(function($i){
  return $i*2;
},$arr);
 
print_r($arr1);
echo '<hr>';
print_r($arrMap) ;

echo '<hr>';

$deepArr = [
  'name'=>'lin',
  'age'=>18,
  'hobby'=>['basketball'=>1,'football'=>'85','pingpang'=>[1,2]]
];

print_r($deepArr);
echo '递归改变数组key值','<hr>';


/**
 * 递归遍历数组，转换数组键值大小写
 */
function hd_array_change_key_case(array $data,int $type=CASE_LOWER):array{
  
  foreach($data as $key=>$value) {
    $action = $type==CASE_LOWER?'strtoupper':'strtolower';
    unset($data[$key]);
    $data[$action($key)] = is_array($value) ? hd_array_change_key_case($value,$type) : $value;
    echo $value.'<hr>';
  }
  
  return $data;
};

print_r(hd_array_change_key_case($deepArr,1));

echo'递归改变数组Key值'.'<hr>';

$database = [
  'HOOT' => 'localHost',
  'poRT' => '3306',
  'User' => 'ROot',
  'cache'=> [
    'type'=>'FIle',
    'txt'=> ['JPG','png','Jpeg']
  ]
  ];

  /**
   * 递归改变数组key 和 value 值
   */
  function hd_array_change_key_value(array $data,int $type=0):array{

    foreach($data as $key=>$v){
      unset($data[$key]);
      $action = $type==0?'strtoupper':'strtolower';
      $data[$action($key)] = is_array($v) ? hd_array_change_key_value($v,$type) : $v;
    }
    foreach($data as $key=>$v){
      $action = $type==0?'strtoupper':'strtolower';
      $data[$key] = is_array($v) ? hd_array_change_key_value($v,$type) : $action($v);
    }

  return $data;

  };

  print_r(hd_array_change_key_value($database,1));

  echo '<hr>';
  var_export($database);

  $config = var_export($database,true);
//文件存储
  file_put_contents('database.php','<?php  return '.$config);

  /**
   * 序列化和反序列化
   */

   echo unserialize(serialize($database)) ;
