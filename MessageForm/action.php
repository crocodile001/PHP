<?php
include('./conn.php');
$act=$_GET['act'];

// 置頂
if($act=='istop'){
    $id=$_GET['id'];

    $sql="update guestbook set istop=1 where id=$id";
    $rs=mysqli_query($conn,$sql);

    if($rs){
        echo '置頂成功';
    }else{
        echo '置頂失敗';
    }
}

// 取消置頂
if($act=='cancel'){
    $id=$_GET['id'];

    $sql="update guestbook set istop=0 where id=$id";
    $rs=mysqli_query($conn,$sql);

    if($rs){
        echo '取消置頂成功';
    }else{
        echo '取消置頂失敗';
    }
}

// 讚
if($act=='praise'){
    $id=$_GET['id'];
    $sql="update guestbook set praise=praise+1 where id=$id";
    $rs=mysqli_query($conn,$sql);

    if($rs){
        header('Location:index.php');
    }else{
        echo '點讚失敗';
    }
}
// 舉報
if($act=='alert'){
    $id=$_GET['id'];
    $sql="update guestbook set alert=1 where id=$id";
    $rs=mysqli_query($conn,$sql);

    if($rs){
        header('Location:./index.php');
    }else{
        echo '舉報失敗';
    }
}
// 回復
if($act=='save_comment'){
        $book_id=$_GET['id'];
        $username=$_POST['username'];
        $content=$_POST['content'];

        $sql="insert into comment(book_id,username,content) values($book_id,'$username','$content')";
        $rs=mysqli_query($conn,$sql);

        if($rs){
            echo '回復成功 , <a href="./index.php">回到首頁</a>';
        }else{
            echo '回復失敗';
        }
}