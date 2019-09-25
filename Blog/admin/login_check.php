<?php
include('../conn.php');

$username=$_POST['username'];
$password=$_POST['password'];

// 驗證有效性
if( strlen($username)<5 ){
    echo '密碼不能小於5個字';   exit;
}

$sql="select * from admin where username='$username' and password='$password'";
$rs=mysqli_query($conn,$sql);

if( $row=mysqli_fetch_assoc($rs) ){
    session_start();
    $_SESSION['userid']=$row['id'];
    $_SESSION['username']=$row['username'];
    $_SESSION['flag']=$row['flag'];
    alert('登入成功','./index.php');
}else{
    alert('登入失敗，請檢查登入名和密碼是否正確','./login.php');
}

