<?php
  include_once 'statusBar.php';
  ini_set('display_errors','off'); 
  
  $subject = test_input($_POST["subject"]);
  $content = test_input($_POST["content"]);
  $memberName = $_SESSION['memberName'];
  $current_time = date("Y-m-d H:i:s");
  $current_timel = date("YmdHis");
  $memberID = $_SESSION['memberID'];
  $fileName = $memberID . $current_timel . $_FILES["img"]["name"];
  $filePath = "upload/" . $fileName;

  if(isset($_SESSION['passed']) && $subject!='' && $content!=''){
    if($subject == $_POST["subject"] && $content == $_POST["content"]){
      $db=mysqli_connect('localhost','id13248042_wp_3f2c7207ac659fe00f10525d8d80fde4','jQLpbv<]j3TROg4q','id13248042_wp_3f2c7207ac659fe00f10525d8d80fde4');
      mysqli_query($db, "SET NAMES utf8");
      if($_FILES['img']['error'] > 0){
        $qstr = "INSERT INTO message(author,subject, content, date, memberID ) VALUES('$memberName','$subject', '$content', '$current_time', '$memberID' )";
        $data = mysqli_query($db,$qstr);
        header("location:index.php");
      }else{
        move_uploaded_file($_FILES["img"]["tmp_name"], $filePath);
        $qstr = "INSERT INTO message(author,subject,content,date,memberID,img) VALUES('$memberName','$subject', '$content', '$current_time', '$memberID' , '$filePath' )";
        $data = mysqli_query($db,$qstr);
        header("location:index.php");
      }
    }
  }else{
    header("location:index.php");
  }
  
?>