<?php
include('../conn.php');

$id=$_POST['id'];
$cate_name=$_POST['cate_name'];
$order_no=$_POST['order_no'];

$sql="update category set cate_name='$cate_name',order_no='$order_no' where id=$id";
$r=mysqli_query($conn,$sql);

if($r){
    alert('修改分類成功','./cate_list.php');
}else{
    echo '修改失敗';
    echo mysqli_error($conn);
}
