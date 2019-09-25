<?php
session_start();
if( !isset($_SESSION['userid']) ){
    alert('驗證超時，請重新登入','./login.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>後臺管理系統</title>
        <link href="./images/index.css" type="text/css" rel="stylesheet">
        <script src="./images/jquery.js"></script>
    </head>
    <body>
        <header>
            <h1>網站後臺管理系統</h1>
            <p>
                <a href="./index.php"><span class="icon home"></span>系統首頁</a>
                <a href="./logout.php"><span class="icon quit"></span>安全退出</a>
            </p>
        </header>
        <section>
            <nav>
                <h3>歡迎來到後台管理</h3>
                <p>登入名 : <strong><?php echo $_SESSION['username']; ?></strong><br/>身 分 : <strong><?php echo $_SESSION['flag'] ?></strong></p>
                <dl>
                    <dt><span class="icon board"></span>文章分類</dt>
                    <dd>
                        <a href="./cate_new.php">-&emsp;新增分類</a>
                        <a href="./cate_list.php">-&emsp;分類列表</a>
                    </dd>
                    <dt><span class="icon news"></span>文章管理</dt>
                    <dd>
                        <a href="./article_new.php">-&emsp;發佈文章</a>
                        <a href="./article_list.php">-&emsp;文章列表</a>
                    </dd>
                    <dt><span class="icon book"></span>留言管理</dt>
                    <dd>
                        <a href="#">-&emsp;留言列表</a>
                    </dd>
                    <dt><span class="icon flink"></span>友情連接管理</dt>
                    <dd>
                        <a href="#">-&emsp;新增連結</a>
                        <a href="#">-&emsp;連接列表</a>
                    </dd>
                    <dt><span class="icon pro"></span>管理員管理</dt>
                    <dd>
                        <a href="#">-&emsp;新增管理員</a>
                        <a href="#">-&emsp;管理員列表</a>
                    </dd>
                </dl>
            </nav>