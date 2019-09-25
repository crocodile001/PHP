<?php
header('Content-Type:text/html; charset=utf-8');
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>用戶登入</title>
</head>
<body>
    <h1>用戶登入</h1>
    <nav>
        <form action="./login_check.php" method="post">
            <p>用戶名 : <input type="text" name="username"/></p>
            <p>輸入密碼 : <input type="password" name="password"/></p>
            <p><input type="submit" value="登入"></p>
        </form>
    </nav>
</body>
</html>
