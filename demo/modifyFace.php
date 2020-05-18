<?php
  include_once 'statusBar.php';
  require_once 'db_config.php';
  require_once 'function.php';
  
  $memberID = $_SESSION['memberID'];
  $oldPath=$_POST['oldPath'];
  $current_timel = date("YmdHis");
  $fileName = $memberID . $current_timel . $_FILES["Face"]["name"];
  $filePath = "upload/" . $fileName;
  $way=$_POST['way'];

  if(isset($_SESSION['passed'])){
    $db=create_connection($dbhost,$user,$password,$database);

    // 只刪除原圖及路徑
    if($way=='delete'){
      if(is_file($oldPath)){
        unlink($oldPath);
      }
      $qstr = "UPDATE member SET Face=NULL WHERE memberID='$memberID'";
      $data = execute_db($db, $database, $qstr);

    // 更換圖片
    }elseif($way=='change'){
      if(is_file($oldPath)){
        unlink($oldPath);
      }

      if($_FILES['Face']['error'] == 0){
        $qstr = "UPDATE member SET Face='$filePath' WHERE memberID='$memberID'";
        $data = execute_db($db, $database, $qstr);
        move_uploaded_file($_FILES["Face"]["tmp_name"], $filePath);
      }
    }
    header("location:member.php");
  }else{
    header("location:index.php");
  }
      
?>