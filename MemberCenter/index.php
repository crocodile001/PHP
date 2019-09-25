<?php
header('Content-Type:text/html; charset=utf-8');
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>會員系統首頁</title>
</head>
<body>
    <h1>會員系統首頁</h1>

    <?php
    session_start();
    if( isset($_SESSION['userid']) ){
        echo $_SESSION['username'].' 歡迎你的登入 <a href="./logout.php">登出</a>';
    }else{
    ?>
        <nav>
            <a href="./reg.php">註冊</a>
            <a href="./login.php">登入</a>
        </nav>
    <?php
    }
    ?>
</body>
</html>
