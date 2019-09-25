<?php
include('../conn.php');
include('./header.php');
$id=$_GET['id'];
$sql="select * from article where id=$id";
$rs=mysqli_query($conn,$sql);

if(mysqli_num_rows($rs)>0){
    $row=mysqli_fetch_assoc($rs);
}else{
    echo '數據不存在';   exit;
}
?>
<div class="mainbox">
    <div class="note">
        <h4>修改文章</h4>
        <form action="./article_edit_save.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data">
            <table class="news_form">
                <tr>
                    <td>文章標題 : </td>
                    <td><label><input type="text" name="title" class="inbox" value="<?php echo $row['title'];?>"/></label></td>
                </tr>
                <tr>
                    <td>文章分類 : </td>
                    <td>
                        <select name="cate_id" class="inbox">
                            <?php
                            $sql="select * from category order by order_no asc,id desc";
                            $rs=mysqli_query($conn,$sql);
                            while( $row2=mysqli_fetch_assoc($rs) ){
                                if($row2['id']==$row['cate_id']){
                                    echo '<option value="'.$row2['id'].'" selected="selected">'.$row2['cate_name'].'</option>';
                                }else {
                                    echo '<option value="'. $row2['id'] .'">'.$row2['cate_name'].'</option>';
                                }
                            }
                            mysqli_free_result($rs);
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>作 者 : </td>
                    <td><label><input type="text" name="author" class="inbox" value="<?php echo $row['author'];?>"/></label></td>
                </tr>
                <tr>
                    <td>文章內容 : </td>
                    <td><label><textarea name="content" cols="60" rows="10"><?php echo $row['content'];?></textarea></label></td>
                </tr>
                <tr>
                    <td>上傳圖片 : </td>
                    <td>
                        <img src="../upfiles/<?php echo $row['img'];?>" width="200"/><br/>
                        <input type="file" name="img" class="inbox"/>
                        <input type="hidden" name="old_img" value="<?php echo $row['img'];?>"/>
                    </td>
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