<?php
include('../conn.php');

$cate_name=$_POST['cate_name'];
$order_no=$_POST['order_no'];

$sql="insert into category(cate_name,order_no) value('$cate_name','$order_no')";
$r=mysqli_query($conn,$sql);

if($r){
    alert('新增分類成功','./cate_list.php');
}else{
    echo '新增失敗';
    echo mysqli_error($conn);
}
