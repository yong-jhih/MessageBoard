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

  if(isset($_SESSION['passed'])){
    if($subject == $_POST["subject"]){
      $db=mysqli_connect('localhost','root','','guestbook');
      if($_FILES['img']['error'] > 0){
        $qstr = "INSERT INTO message(subject, content, date, memberID ) VALUES('$subject', '$content', '$current_time', '$memberID' )";
        $data = mysqli_query($db,$qstr);
        header("location:index.php");
      }else{
        move_uploaded_file($_FILES["img"]["tmp_name"], $filePath);
        $qstr = "INSERT INTO message( subject, content, date, memberID , img) VALUES('$subject', '$content', '$current_time', '$memberID' , '$filePath' )";
        $data = mysqli_query($db,$qstr);
        header("location:index.php");
      }
    }
  }else{
    header("location:index.php");
  }
  
?>