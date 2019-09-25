<?php
include('./conn.php');

$id=$_GET['id'];
$sql="select * from guestbook where id=$id";
$rs=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($rs);       // 獲取數據
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>修改留言</title>
</head>
<body>
    <form action="./edit_save.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id?>" />
        <p><label>用戶名:<input type="text" name="username" value="<?php echo $row['username'];?>"/></label></p>
        <p><label>留言:<textarea name="content" cols="80" rows="10"><?php echo $row['content'];?></textarea></label></p>
        <p><input type="submit" value="送出" /></p>
    </form>
</body>
</html>