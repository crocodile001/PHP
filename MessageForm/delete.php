<?php
include('./conn.php');

$id=$_GET['id'];

// 驗證有效性
if( !is_numeric($id) ){
    echo 'ID不是一個數字';
    exit;
}

$sql="delete from guestbook where id=$id";
$rs=mysqli_query($conn,$sql);

if($rs){
    echo '刪除成功';
    //header('Location:./index.php');   // 跳轉到首頁
    echo '<script>alert("刪除成功");location.href="./index.php";</script>';
}else{
    echo '刪除失敗';
    echo mysqli_error($conn);
}
