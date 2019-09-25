<?php
header('Content-Type:text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>文件上傳</title>
</head>
<body>
    <!--
    必須以post方式提交
    必須指定form數據提交的編碼類型為多格式上傳
    enctype="multipart/form-data
    -->
    <form action="./upfile.php" method="post" enctype="multipart/form-data">
        <p>用戶名 : <label><input type="text" name="username"/></label></p>
        <p>文件上傳 : <input type="file" name="img"/></p>
        <p><input type="submit" value="提交"/></p>
    </form>
</body>
</html>


