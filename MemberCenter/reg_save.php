<?php
include('./conn.php');

$username=$_POST['username'];
$password=$_POST['password'];
$password2=$_POST['password2'];
$tel=$_POST['tel'];

// 驗證有效性
if( mb_strlen($username,'utf-8')<2 ){
    echo '用戶名不能少於2個字';  exit;
}
if( strlen($password)<6 ){
    echo '密碼不能少於6位數';   exit;
}
if( $password!=$password2 ){
    echo '兩次輸入的密碼不一樣';    exit;
}

// 加密
$password=md5($password);

$sql="insert into member(username,password,tel) values('$username','$password','$tel')";
$r=mysqli_query($conn,$sql);

if($r){
    // 註冊完後自動登入
    $id=mysqli_insert_id($conn);
    session_start();
    $_SESSION['username']=$username;
    $_SESSION['userid']=$id;
    $_SESSION['tel']=$tel;
    echo '恭喜註冊成功 <a href="./index.php">回到首頁</a>';
}else{
    echo '註冊失敗';
    echo mysqli_error($conn);
}
