<?php
include('../conn.php');

$id=$_GET['id'];
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
    $filename=$_POST['old_img'];
}

$sql="update article set title='$title',cate_id='$cate_id',author='$author',content='$content',img='$filename' where id=$id";
$r=mysqli_query($conn,$sql);

if($r){
    alert('修改文章成功','./article_list.php');
}else{
    echo '修改失敗';
    echo mysqli_error($conn);
}
