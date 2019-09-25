<?php
include('./conn.php');

$username=$_POST['username'];
$password=md5($_POST['password']);

$sql="select * from member where username='$username' and password='$password'";
$rs=mysqli_query($conn,$sql);

if( mysqli_num_rows($rs)>0 ){
    // 使用session
    $row=mysqli_fetch_assoc($rs);
    session_start();
    $_SESSION['username']=$row['username'];
    $_SESSION['userid']=$row['id'];
    $_SESSION['tel']=$row['tel'];
    echo '登入成功 <a href="./index.php">回到首頁</a>';
}else{
    echo '用戶名或密碼錯誤';
    //echo mysqli_error($conn);
}


