<?php

/**
 * 数组操作函数 -> 数组方法
 * array()：创建一个数组。
 * count()：返回数组的长度。
 * empty()：检查数组是否为空。
 * is_array()：检查一个变量是否为数组。
 * isset()：检查数组中是否存在某个键。
 * unset()：删除数组中的某个键值对。
 * sort()：对数组进行升序排序。
 * rsort()：对数组进行降序排序。
 * asort()：根据值对数组进行升序排序，保持键值关联。
 * ksort()：根据键对数组进行升序排序。
 * arsort()：根据值对数组进行降序排序，保持键值关联。
 * krsort()：根据键对数组进行降序排序。
 * array_key_exists()：检查数组中是否存在某个键。
 * array_search()：在数组中搜索给定的值，并返回对应的键。
 * array_push()：将一个或多个元素添加到数组的末尾。
 * array_pop()：删除数组的最后一个元素，并返回被删除的元素。
 * array_shift()：删除数组的第一个元素，并返回被删除的元素。
 * array_unshift()：将一个或多个元素添加到数组的开头。
 * array_merge()：合并两个或多个数组。
 * array_slice()：从数组中取出一段元素。
 * array_splice()：对数组进行插入、删除和替换操作。
 * implode()：将数组元素连接成一个字符串。
 * explode()：将一个字符串分割成数组。
 */

 $arr = [];
 array_push($arr,'notion');
 print_r($arr)  ;