<?php
include('../conn.php');

$id=$_GET['id'];

// 刪除文章對應的圖片
$rs=mysqli_query($conn,"select img from article where id=$id");
$row=mysqli_fetch_assoc($rs);
if(strlen($row['img'])>1){
    unlink('../upfiles/'.$row['img']);
}
mysqli_free_result($rs);

$sql="delete from article where id=$id";
$rs=mysqli_query($conn,$sql);

if($rs){
    alert('刪除成功','./article_list.php');
}else{
    echo '刪除失敗';
    echo mysqli_error($conn);
}


