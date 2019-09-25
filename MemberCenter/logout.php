<?php
header('Content-Type:text/html; charset=utf-8');

session_start();
$_SESSION=array();
session_destroy();

echo '登出成功 <a href="./index.php">回到首頁</a>';

