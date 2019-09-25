<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
    <link href="default.css" rel="stylesheet" type="text/css" media="all" />
    <link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
    <!--[if IE 6]>
    <link href="default_ie6.css" rel="stylesheet" type="text/css" />
    <![endif]-->
</head>
<body>
<div id="wrapper">
    <div id="header-wrapper">
        <div id="header" class="container">
            <div id="logo">
                <h1><a href="#">Reddened</a></h1>
                <p>Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a></p>
            </div>
            <div id="social">
                <ul class="contact">
                    <li><a href="#" class="icon icon-twitter"><span>Twitter</span></a></li>
                    <li><a href="#" class="icon icon-facebook"><span></span></a></li>
                    <li><a href="#" class="icon icon-dribbble"><span>Pinterest</span></a></li>
                    <li><a href="#" class="icon icon-tumblr"><span>Google+</span></a></li>
                    <li><a href="#" class="icon icon-rss"><span>Pinterest</span></a></li>
                </ul>
            </div>
        </div>
        <div id="menu" class="container">
            <ul>
                <li class="current_page_item"><a href="./index.php" accesskey="1">首頁</a></li>
                <?php
                $sql="select * from category order by order_no asc,id desc";
                $rs=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_assoc($rs)){
                    echo '<li><a href="./article.php?cate_id='.$row['id'].'">'.$row['cate_name'].'</a></li>';
                }
				echo '<li><form action="./search.php" method="get">';
				echo '<input type="text" name="keywords"/>';
				echo '</form></li>';
                ?>
            </ul>
        </div>
    </div>