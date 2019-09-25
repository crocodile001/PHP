<?php
include('../conn.php');

$id=$_GET['id'];

$sql="delete from category where id=$id";
$rs=mysqli_query($conn,$sql);

if($rs){
    alert('刪除成功','./cate_list.php');
}else{
    echo '刪除失敗';
    echo mysqli_error($conn);
}


