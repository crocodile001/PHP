<?php
include('../conn.php');

$title=$_POST['title'];
$cate_id=$_POST['cate_id'];
$author=$_POST['author'];
$content=$_POST['content'];
$img=$_FILES['img'];

if($img['name']){
    $ext=strrchr($img['name'],'.');

    $exts=['.jpg','.png','.gif'];
    if( !in_array($ext,$exts) ){
        alert('文件類型不允許上傳','./article_new.php');     exit;
    }

    $filename=date('YmdHis').rand(100,999).$ext;
    move_uploaded_file($img['tmp_name'],'../upfiles/'.$filename);
}else{
    $filename='';
}

$sql="insert into article(title,cate_id,author,content,img) value('$title','$cate_id','$author','$content','$filename')";
$r=mysqli_query($conn,$sql);

if($r){
    alert('新增文章成功','./article_list.php');
}else{
    echo '新增失敗';
    echo mysqli_error($conn);
}
