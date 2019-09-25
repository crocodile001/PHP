<?php
include('./conn.php');
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>鱷魚的留言板</title>
    <style>
        a{text-decoration:none;color:#00f;}
        a:hover{color:#f00;}
        .page{text-align:center;padding:20px 0;}
        .page a{padding:4px 6px;border:1px solid #ccc;font:16px/16px verdana;color:#444;}
        .page a:hover,.page a.on{border:1px solid #f00;color:#f00;}
        .commentform{display:none}
        p span{display:block;font:12px/20px arial;margin:4px 24px;border:1px solid #ccc;}
    </style>
</head>
<body>
    <!--留言表單-->
    <form action="./new_save.php" method="post" enctype="multipart/form-data">
        <p><label>用戶名:<input type="text" name="username"/></label></p>
        <p><label>留言:<textarea name="content" cols="80" rows="10"></textarea></label></p>
        <p>上傳頭像 : <input type="file" name="img"/></p>
        <p><input type="submit" value="送出"/></p>
    </form>
    <hr/>

    <?php
        //  顯示分頁
        $pagesize=3;                                        // 一頁顯示的留言數
        $page=isset($_GET['page'] ) ? $_GET['page'] : 1;    // 判斷所在頁數(默認為第一頁)

        $sql='select * from guestbook where alert=0 order by istop desc,id asc';
        $rs=mysqli_query($conn,$sql);

        $row_count=mysqli_num_rows($rs);                // 留言總數
        $pagecount=ceil($row_count/$pagesize);      // 分頁總數

        $start=($page-1)*$pagesize;                     // 起始留言
        $sql.=" limit $start,$pagesize";

        $rs=mysqli_query($conn,$sql);                   // 只收集要顯示的留言
        while($row=mysqli_fetch_assoc($rs)){
            echo " <p>{$row['id']}# {$row['username']} 於 {$row['intime']} 說 : <br/>";   // 留言者的資料
            // 頭像顯示
            if(strlen($row['img'])>0 ){
                echo '<img src="./pic/'.$row['img'].'" height="50px" width="50px"/><br/>';
            }
            echo "{$row['content']}";                                       // 顯示留言內容

            echo ' <a href="./delete.php?id='.$row['id'].'">刪除</a>';     // 刪除連結
            echo ' <a href="./edit.php?id='.$row['id'].'">修改</a>';     // 修改連結

            // 置頂
            if($row['istop']){
                echo ' <a href="./action.php?act=cancel&id='.$row['id'].'">取消置頂</a>';
            }else{
                echo ' <a href="./action.php?act=istop&id='.$row['id'].'">置頂</a>';
            }

            echo ' <a href="./action.php?act=praise&id='.$row['id'].'">讚('.$row['praise'].')</a>';     // 點讚
            echo ' <a href="./action.php?act=alert&id='.$row['id'].'">舉報</a>';      // 舉報

            // 回復按鈕
            echo ' <a href="javascript:show('.$row['id'].')">回復</a>';
            // 顯示回復的內容
            $sql2="select * from comment where book_id=".$row['id'];
            $rs2=mysqli_query($conn,$sql2);
            while($row2=mysqli_fetch_assoc($rs2)){
                echo '<span>';
                echo $row2['username'].'在'.$row2['intime'].'回復 : '.$row2['content'];
                echo '</span>';
            }
            // 顯示回復form表單
            echo '<p><form action="./action.php?act=save_comment&id='.$row['id'].'" id="comment'.$row['id'].'" class="commentform" method="post">';
            echo ' 用戶名 : <input type="text" name="username"/>';
            echo ' 回復 : <input type="text" name="content"/>';
            echo ' <input type="submit" value="提交"/>';
            echo '</form></p>';
        }

        // 頁碼表
        echo '<div class="page">';
        for($i=1;$i<=$pagecount;$i++){
            if($i==$page) {
                echo ' <a href="./index.php?page=' . $i . '" class="on">' . $i . '</a>';
            }else{
                echo ' <a href="./index.php?page=' . $i . '">' . $i . '</a>';
            }
        }
        echo '</div>';
    ?>

    <!--打開留言表單-->
    <script>
        function show(id){
            var obj=document.getElementById('comment'+id);
            if(obj.style.display=='' || obj.style.display=='none'){
                obj.style.display='block';
            }else{
                obj.style.display='none';
            }
        }
    </script>

</body>
</html>