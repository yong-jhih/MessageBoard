<?php
    session_start();
    include_once 'statusBar.php';
    require_once('db_config.php');
    require_once('function.php');

    $deleteID = $_POST['deleteID'];
    $db=create_connection($dbhost,$user,$password,$database);

    if(isset($_SESSION['passed'])){
        // 刪除圖片檔
        $qstr = "SELECT * FROM message where postID='$deleteID'";
        $data = execute_db($db, $database, $qstr);
        $r = mysqli_fetch_assoc($data);
        if(is_file($r['img'])){
            unlink($r['img']);
        }

        // 刪除文章資料
        $qstr = "DELETE FROM message where postID='$deleteID' OR subID='$deleteID'";
        $data = execute_db($db, $database, $qstr);
        echo json_encode($deleteID);
        if($_SESSION['permission']==0){
            header("location:manager.php");
          }
        header("location:member.php");
    }else{
        header("location:index.php");
    }
?>