<?php


// phpinfo();

/**
 * extension_loaded  查看用户电脑有没有GD库
 * imagecreatetruecolor
 */

//  var_dump(extension_loaded('GD'));

//  header("Content-type:images/jpeg");
// readfile('/img/icon.jpg');

// 创建画布
$res = imagecreatetruecolor(500, 500);

// 创建颜色
$red = imagecolorallocate($res, 255, 0, 0);

$green = imagecolorallocate($res, 0, 255, 0);

//填充颜色
imagefill($res, 0, 0, $red);

// 输出图片
header("Content-type:images/jpeg");
imagepng($res,'11.png');



// 