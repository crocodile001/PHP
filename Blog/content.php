<?php
include('./conn.php');
include('./header.php');
?>
<div id="page" class="container">
    <?php
    $id=$_GET['id'];
	
	//$sql="select article.*,category.cate_name from article,category where article.caye_id=category.id and article.id=$id";
    $sql="select * from article where id=$id";
    
	$rs=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($rs);
	
	// 獲取分類名
	$cate=mysqli_query($conn,"select * from category where id=".$row['cate_id']);
	$cate_row=mysqli_fetch_assoc($cate);
	
	// 更新訪問量
	$sql="update article set views=views+1 where id=$id";
	mysqli_query($conn,$sql);

    echo '<div id="content">';
		echo '<div class="post">';
			echo '<h4>當前所在位置 : <a href="./"> 首頁 </a> > '.$cate_row['cate_name'].' > '.$row['title'].' </h4><br/><br/>';
			echo '<h2><a href="./content.php?id='.$row['id'].'">'.$row['title'].'</a></h2>';
			echo '<h4>發布時間 : '.$row['intime'].' 作者 : '.$row['author'].' 訪問人數 : '.$row['views'].' </h4>';
			if(strlen($row['img'])>0)
				echo '<p><img src="./upfiles/'.$row['img'].'" class="image image-full" /></p>';
			echo '<p>'.nl2br($row['content']).'</p><br/>';
			echo '<h4>評論</h4>';
			echo '<ul>';
			echo '<li>張三 在 2018-2-15 說 : 大家好</li>';
			echo '</ul>';
		echo '</div>';
		
		echo '<form>';
			echo '<p><h4>用戶名 : </h4><input type="text" name="username"/> </p>';
			echo '<p><h4>留言 : </h4><textarea name="content"  cols="60" rows="6"></textarea></p>';
			echo '<p><input type="submit" value="送出"></p>';
		echo '</form>';
    echo '</div>';
	?>
<?php
include('./right.php');
include('./footer.php');
?>

    <!--
    <div class="post">
        <h2>Mauris vulputate dolor</h2>
        <p><img src="images/img03.jpg" alt="" class="image image-full" /></p>
        <p>This is <strong>Reddened </strong>, a free, fully standards-compliant CSS template designed by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.  The photo used in this template is from <a href="http://fotogrph.com/">Fotogrph</a>.  This free template is released under the <a href="http://creativecommons.org/licenses/by/3/">Creative Commons Attribution</a> license, so you’re pretty much free to do whatever you want with it (even use it commercially) provided you give us credit for it. Have fun :)</p>
    </div>
    <div class="post">
        <div class="post-title">
            <h2>Mauris vulputate dolor</h2>
            <span>Donec pulvinar ullamcorper metus</span>
        </div>
        <p>Pellentesque pede. Donec pulvinar ullamcorper metus. In eu odio at lectus pulvinar mollis. Vestibulum sem magna, elementum ut, vestibulum eu, facilisis quis, arcu. Mauris a dolor. Nulla facilisi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed blandit. Phasellus pellentesque, ante nec iaculis dapibus, eros justo auctor lectus, a lobortis lorem mauris quis nunc. Pellentesque pede. Donec pulvinar ullamcorper metus. In eu odio at lectus pulvinar mollis. </p>
    </div>
    -->
