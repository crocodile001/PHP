<?php
include('./conn.php');
include('./header.php');
?>
<div id="page" class="container">
    <?php
	
	$keywords=$_GET['keywords'];
	echo '<h4>當前所在位置 : <a href="./"> 首頁 </a> > '.$keywords.' </h4><br/><br/>';
	
    $sql="select * from article where title like '%$keywords%' order by intime desc limit 3";
    $rs=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($rs)){
        echo '<div id="content">';
            echo '<div class="post">';
                echo '<h2><a href="./content.php?id='.$row['id'].'">'.$row['title'].'</a></h2>';
				if(strlen($row['img'])>0)
					echo '<p><img src="./upfiles/'.$row['img'].'" class="image image-full" /></p>';
                echo '<p>'.mb_substr($row['content'],0,500,'utf-8').'......</p>';
            echo '</div>';
        echo '</div>';
    }
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
