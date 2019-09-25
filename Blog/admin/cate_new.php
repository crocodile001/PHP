<?php
include('./header.php');
?>
<div class="mainbox">
    <div class="note">
        <h4>發表新聞</h4>
        <form action="./cate_new_save.php" method="post">
            <table class="news_form">
                <tr>
                    <td>分類名 : </td>
                    <td><label><input type="text" name="cate_name" class="inbox"/></label></td>
                </tr>
                <tr>
                    <td>排序號 : </td>
                    <td><label><input type="text" name="order_no" class="inbox"/></label></td>
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