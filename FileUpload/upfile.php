<?php
header('Content-Type:text/html; charset=utf-8');

$username=$_POST['username'];
$img=$_FILES['img'];

date_default_timezone_set('PRC');

$filename=date('YmdHis').rand(100,999);		// 生成文件名，格式:年月日時分秒隨機數
$ext=strrchr( $img['name'],'.' );		// 獲取文件擴展名

if($ext!='.jpg' && $ext!='.png'&& $ext!='.jpg'){
    echo '文件類型不允許上傳';	exit;
}

move_uploaded_file($img['tmp_name'],'./pic/'.$filename.$ext);
echo '上傳成功';

