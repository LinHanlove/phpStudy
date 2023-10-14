<?php

/**
 * 文件上传环境配置
 * 修改php.ini可以定制上传机制，通过phpinfo()查看
 * file_uploads = On 是否允许上传文件
 * upload_max_filesize = 2M  允许上传最大文件大小
 * post_max_size = 8M  允许上传最大数据大小
 * max_file_uploads = 20  允许同时上传文件数量
 * 
 * 错误
 * 0 没有错误
 * 1 上传文件大小超过了HTML表单中MAX_FILE_SIZE选项指定的值
 * 2 上传文件超过了php.ini中upload_max_filesize选项的值
 * 3 上传文件超过了HTML表单中MAX_FILE_SIZE选项指定的值
 * 4 文件只有部分被上传
 * 5 没有文件被上传
 * 6 找不到临时文件夹
 * 7 文件写入失败
 * 8 文件上传被暂停
 * 9 文件上传出错
 * 10 文件上传被终止
 * 
 * 
 * 判断 操作临时文件
 * is_uploaded_file() 判断文件是否是通过 HTTP POST 上传的
 * move_uploaded_file() 移动上传的文件
 */



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 获取上传文件的信息
    $file_name = $_FILES["file"]["name"];

    $file_tmp = $_FILES["file"]["tmp_name"];
    
    // 移动文件到根目录
    $upload_directory = $_SERVER['DOCUMENT_ROOT']; // 获取服务器根目录路径

    echo $upload_directory;

    $destination = $upload_directory . '/phpData'.'/' . $file_name; // 设置文件的目标路径
    
    // 将文件移动到目标路径
    if (move_uploaded_file($file_tmp, $destination)) {
        echo "文件上传成功。";
    } else {
        echo "文件上传失败。";
    }
}
?>
