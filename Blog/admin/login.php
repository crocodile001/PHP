<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>後台登入</title>
        <style>
            html,body{margin:0;padding:0;background:#26272b;}
            form{width:500px;height:350px;margin:100px auto 0;background:#f1f2f9;text-align:center;border-radius:8px;}
            form h3{margin:0 0 50px 0;height:50px;font:24px/50px 微軟雅黑;background:#dfe0e7;border-bottom:1px solid #26272b;border-radius:8px 8px 0 0;}
            .input1{font:16px/32px 微軟雅黑;width:240px;}
            .btn1{font:18px/36px 微軟雅黑;width:160px;border:0;background:#30ae3c;border-radius:4px;color:#fff;margin-top:30px;}
        </style>
    </head>
    <body>
        <form action="./login_check.php" method="post">
            <h3>後臺登入</h3>
            <p>登入名 : <label><input type="text" name="username" class="input1"/></label></p>
            <p>密&emsp;碼 : <label><input type="password" name="password" class="input1"/></label></p>
            <p><input type="submit" value="登入" class="btn1"/></p>
        </form>
    </body>
</html>
