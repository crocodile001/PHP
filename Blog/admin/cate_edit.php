<?php
include('../conn.php');
include('./header.php');

$id=$_GET['id'];
$sql="select * from category where id=$id";
$rs=mysqli_query($conn,$sql);
if(mysqli_num_rows($rs)>0){
    $row=mysqli_fetch_assoc($rs);
}else{
    echo '沒有數據';    exit;
}
?>
<div class="mainbox">
    <div class="note">
        <h4>發表新聞</h4>
        <form action="./cate_edit_save.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <table class="news_form">
                <tr>
                    <td>分類名 : </td>
                    <td><label><input type="text" name="cate_name" class="inbox" value="<?php echo $row['cate_name'];?>"/></label></td>
                </tr>
                <tr>
                    <td>排序號 : </td>
                    <td><label><input type="text" name="order_no" class="inbox" value="<?php echo $row['order_no'];?>"/></label></td>
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