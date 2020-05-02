<?php
    include_once 'statusBar.php';
    ini_set('display_errors','off');
    $deleteID = $_POST['deleteID'];
    $db=mysqli_connect('localhost','id13248042_wp_3f2c7207ac659fe00f10525d8d80fde4','jQLpbv<]j3TROg4q','id13248042_wp_3f2c7207ac659fe00f10525d8d80fde4');
    mysqli_query($db, "SET NAMES utf8");

    if(isset($_SESSION['passed'])){
        // 刪除圖片檔
        $qstr = "SELECT * FROM message where postID='$deleteID'";
        $data = mysqli_query($db,$qstr);
        $r = mysqli_fetch_assoc($data);
        if(is_file($r['img'])){
            unlink($r['img']);
        }

        // 刪除文章資料
        $qstr = "DELETE FROM message where postID='$deleteID' OR subID='$deleteID'";
        $data = mysqli_query($db,$qstr);
        echo json_encode($deleteID);
        if($_SESSION['permission']==0){
            header("location:manager.php");
          }
        header("location:member.php");
    }else{
        header("location:index.php");
    }
?>