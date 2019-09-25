<?php
include('../conn.php');
include('./header.php');
?>
<div class="mainbox">
    <div class="note">
        <h4>發佈文章</h4>
        <form action="./article_new_save.php" method="post" enctype="multipart/form-data">
            <table class="news_form">
                <tr>
                    <td>文章標題 : </td>
                    <td><label><input type="text" name="title" class="inbox"/></label></td>
                </tr>
                <tr>
                    <td>文章分類 : </td>
                    <td>
                        <select name="cate_id" class="inbox">
                            <?php
                            $sql="select * from category order by order_no asc,id desc";
                            $rs=mysqli_query($conn,$sql);
                            while( $row=mysqli_fetch_assoc($rs) ){
                                echo '<option value="'.$row['id'].'">'.$row['cate_name'].'</option>';
                            }
                            mysqli_free_result($rs);
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>作 者 : </td>
                    <td><label><input type="text" name="author" class="inbox"/></label></td>
                </tr>
                <tr>
                    <td>文章內容 : </td>
                    <td><label><textarea name="content" cols="60" rows="10"></textarea></label></td>
                </tr>
                <tr>
                    <td>上傳圖片 : </td>
                    <td><input type="file" name="img" class="inbox"/></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="送出"/></td>
                </tr>
            </table>
        </form>
    </div>
</div>
<?php
include('./footer.php');
?>