<?php
header('Content-Type:text/html; charset=utf-8');
date_default_timezone_set('PRC');

$conn=mysqli_connect('localhost','root') or die('連接數據庫失敗');
mysqli_query($conn,'use blog');
mysqli_query($conn,'set names utf8');

function alert($str,$url){
    echo '<script>alert("'.$str.'"); location.href="'.$url.'"</script>';
}

