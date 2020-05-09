<?php
  session_start();
  include_once 'statusBar.php';
  require_once('db_config.php');
  require_once('function.php');
  
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
      $db=create_connection($dbhost,$user,$password,$database);
      if($_FILES['img']['error'] > 0){
        $qstr = "INSERT INTO message(author,subject, content, date, memberID ) VALUES('$memberName','$subject', '$content', '$current_time', '$memberID' )";
        $data = execute_db($db, $database, $qstr);
        header("location:index.php");
      }else{
        move_uploaded_file($_FILES["img"]["tmp_name"], $filePath);
        $qstr = "INSERT INTO message(author,subject,content,date,memberID,img) VALUES('$memberName','$subject', '$content', '$current_time', '$memberID' , '$filePath' )";
        $data = execute_db($db, $database, $qstr);
        header("location:index.php");
      }
    }
  }else{
    header("location:index.php");
  }
  
?>