<?php
  include_once 'statusBar.php';
  ini_set('display_errors','on');
  $memberID = $_SESSION['memberID'];
  $db=mysqli_connect('localhost','id13248042_wp_3f2c7207ac659fe00f10525d8d80fde4','jQLpbv<]j3TROg4q','id13248042_wp_3f2c7207ac659fe00f10525d8d80fde4');
  mysqli_query($db, "SET NAMES utf8");

  $oldPath=$_POST['oldPath'];
  $current_timel = date("YmdHis");
  $fileName = $memberID . $current_timel . $_FILES["Face"]["name"];
  $filePath = "upload/" . $fileName;
  $way=$_POST['way'];

  if(isset($_SESSION['passed'])){
    // 只刪除原圖及路徑
    if($way=='delete'){
      if(is_file($oldPath)){
        unlink($oldPath);
      }
      $qstr = "UPDATE member SET Face=NULL WHERE memberID='$memberID'";
      mysqli_query($db,$qstr);

    // 更換圖片
    }elseif($way=='change'){
      if(is_file($oldPath)){
        unlink($oldPath);
      }

      if($_FILES['Face']['error'] == 0){
        $qstr = "UPDATE member SET Face='$filePath' WHERE memberID='$memberID'";
        $data = mysqli_query($db,$qstr);
        move_uploaded_file($_FILES["Face"]["tmp_name"], $filePath);
      }
    }
    if($_SESSION['permission']==0){
      header("location:manager.php");
    }else{
      header("location:member.php");
    }
  }else{
    header("location:index.php");
  }
      
?>