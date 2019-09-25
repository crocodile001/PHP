<?php
// 這是退出系統的功能

include('../conn.php');
session_start();
$_SESSION=[];
session_destroy();

alert('退出成功','./login.php');
