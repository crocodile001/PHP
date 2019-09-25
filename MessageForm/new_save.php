<?php
header('Content-Type:text/html; charset=utf-8');

//連接數據庫
include('./conn.php');

$username=$_POST['username'];
$content=$_POST['content'];
$img=$_FILES['img'];

// 驗證有效性
if( strlen($username)<2 ){
    echo '用戶名不能小於兩個字';
    exit;
}
if( strlen($content)<2 ){
    echo '留言內容不能為空';
    exit;
}
if( strlen($img['name'])>0 ){
    // 文件上傳
    date_default_timezone_set('PRC');
    $ext=strrchr( $img['name'],'.' );		// 獲取文件擴展名

    $allow=['.jpg','.png','.jpg'];                  // 限制上傳文件副檔名
    if( !in_array($ext,$allow) ){
        echo '文件類型不允許上傳';	exit;
    }

    $filename=date('YmdHis').rand(100,999).$ext;		// 生成文件名，格式:年月日時分秒隨機數
    move_uploaded_file($img['tmp_name'],'./pic/'.$filename);
}else{
    $filename='';
}

$sql="insert into guestbook(username,content,img) values('$username','$content','$filename')";
$rs=mysqli_query($conn,$sql);

if( $rs ){
    echo '發佈成功';
    echo '<a href="./index.php">回到首頁</a>';
}else{
    echo '發佈失敗';
    echo mysqli_error($conn);
}


