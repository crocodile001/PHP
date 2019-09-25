<?php
header('Content-Type:text/html; charset=utf-8');
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>註冊新用戶</title>
</head>
<body>
    <h1>註冊新用戶</h1>
    <nav>
        <form action="./reg_save.php" method="post">
            <p>用戶名 : <input type="text" name="username"/></p>
            <p>輸入密碼 : <input type="password" name="password"/></p>
            <p>確認密碼 : <input type="password" name="password2"/></p>
            <p>電話號碼 : <input typr="text" name="tel"/></p>
            <p><input type="submit" value="註冊"></p>
        </form>
    </nav>
</body>
</html>
