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