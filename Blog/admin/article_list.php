<?php
include('../conn.php');
include('./header.php');
?>
<div class="mainbox">
    <div class="note">
        <h4>分類列表</h4>
        <!--
        <form method="post" action="" class="search_form">
            <input type="text" name="keywords" placeholder="請輸入要搜索的關鍵字"/>
            <input type="submit" value="搜索"/>
        </form>
        -->
        <table class="new_list">
            <thead>
                <tr>
                    <th width="5%">ID</th>
                    <th width="25%">標題</th>
                    <th width="12%">文章分類</th>
                    <th width="35%">內容</th>
                    <th width="10%">點擊率</th>
                    <th width="13%">操作</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql="select article.*,category.cate_name from article,category where article.cate_id=category.id order by article.id desc";
                $rs=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_assoc($rs)){
                    echo '<tr>';
                    echo '<td>',$row['id'],'</td>';
                    echo '<td>',$row['title'],'</td>';
                    echo '<td>',$row['cate_name'],'</td>';
                    echo '<td>',mb_substr($row['content'],0,40,'utf-8'),'</td>';
                    echo '<td>',$row['views'],'</td>';
                    echo '<td>';
                    echo '<a href="./article_edit.php?id='.$row['id'].'">修改</a> /';
                    echo ' <a href="./article_delete.php?id='.$row['id'].'" onclick="return confirm(\'你確定要刪除嗎 ? \')">刪除</a>';
                    echo '</td>';
                    echo '</tr>';
                }
                ?>

            </tbody>
        </table>
        <!--
        <div class="page">
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#" class="on">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
        </div>
        -->
    </div>
</div>
<?php
include('./footer.php');
?>