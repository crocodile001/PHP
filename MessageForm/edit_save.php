<?php
include('./conn.php');

$username=$_POST['username'];
$content=$_POST['content'];
$id=$_POST['id'];

// 驗證有效性 (略)

// 修改留言
$sql="update guestbook set username='$username',content='$content' where id=$id";
$rs=mysqli_query($conn,$sql);

if($rs){
    echo '修改成功';
    header('Location:./index.php');
}else{
    echo '修改失敗';
    echo mysqli_error($conn);
}
