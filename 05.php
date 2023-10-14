<?php

/**
 * 数组
 * 声明 array
 */

 $arr  = array(
  'a',2,43,45,5,5
 );

 echo $arr;
 print_r($arr);

 $arr1 = [0=>'lin',1=>'han',3=>0];
 print_r( $arr1);
 echo '<hr>';

 // 二维数组
 $info = [
 [ 'title'=> 'Notion',
  'date' => '2022-09-07',
  'created' => 'linhan']
 ];

 print_r($info);

 // 给数组追加赋值
 echo '<hr>';

 $arr2 = [0=>'dsd'];
 $arr2[] = 'linhan';
 $arr2[] = 'Notion';
 $arr2[] = 'php';


 print_r($arr2);
 echo '<hr>';

 /**
  * 数组函数方法
  * key() key值
  * current() value值
  * next() 查找下一个
  * prev() 上一个
  */

  echo current($arr);

  next($arr);

  echo current($arr);

  /**
   * 数组循环
   */
  $info1 = [
    [ 'title'=> 'Notion','date' => '2022-09-07','created' => 'linhan'],
    [ 'title'=> 'arco','date' => '2022-09-08','created' => 'linhan1'],
    [ 'title'=> 'Notion','date' => '2022-09-09','created' => 'linhan2'],
    [ 'title'=> '西红柿炒鸡蛋','date' => '2022-09-10','created' => 'linhan3'],
  ]

  ?>

  <table border="1">
    <tr>
    <th>序号</th>

      <th>标题</th>
      <th>时间</th>
      <th>创建人</th>
    </tr>
    
    
    <?php while ($user = current($info1)) { ?>
       <tr>
        <td>
          <?php echo key($info1)+1 ?>
        </td>
        <td><?php echo $user['title'] ?></td>
        <td><?php echo $user['date'] ?></td>
        <td><?php echo $user['created'] ?></td>
       </tr>
    <?php next($info1); } ?>
    
   
  </table>
  <?php
  /**
   * list  类似与解构赋值
   */
  echo '<hr>';

   list($a,$b,$c) = $info1;
   list('title'=>$a1,'date'=>$b1,'create'=>$c1) = $a;
   echo $b1;
   
   // 基于list循环
   echo '<hr>';

   $users = [
    [ 'title'=> 'Notion','date' => '2022-09-07','created' => 'linhan'],
    [ 'title'=> 'arco','date' => '2022-09-08','created' => 'linhan1'],
    [ 'title'=> 'Notion','date' => '2022-09-09','created' => 'linhan2'],
    [ 'title'=> '西红柿炒鸡蛋','date' => '2022-09-10','created' => 'linhan3'],
   ];
   while (list('title' => $title,'date' => $date,'created' => $created) = current($users)) {
    echo key($users);
    echo "title:{$title} , date:{$date} , created:{$created}".'<hr>';

    next($users);
   }

   /**
    * foreach
    * 数组 as 下标 第几项
    */
    foreach ($users as $inx => $i) {
      echo $i;
      echo $inx;
    }