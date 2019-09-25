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
                    <th>ID</th>
                    <th>分類名</th>
                    <th>排序號</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql="select * from category order by order_no asc,id asc";
                $rs=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_assoc($rs)){
                    echo '<tr>';
                    echo '<td>',$row['id'],'</td>';
                    echo '<td>',$row['cate_name'],'</td>';
                    echo '<td>',$row['order_no'],'</td>';
                    echo '<td>';
                    echo '<a href="./cate_edit.php?id='.$row['id'].'">修改</a> /';
                    echo ' <a href="./cate_delete.php?id='.$row['id'].'">刪除</a>';
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