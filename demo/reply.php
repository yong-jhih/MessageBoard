<?php
  include_once 'statusBar.php';
  ini_set('display_errors','off');
  
  $content = test_input($_POST["reply"]);
  $current_time = date("Y-m-d H:i:s");
  $memberID = $_SESSION['memberID'];
  $memberName = $_SESSION['memberName'];
  $subID = test_input($_POST["subID"]);
  $subject = test_input($_POST["subject"]);

  if(isset($_SESSION['passed'])){
    if($content == $_POST["reply"] && $subID == $_POST["subID"]){
      $db=mysqli_connect('localhost','id13248042_wp_3f2c7207ac659fe00f10525d8d80fde4','jQLpbv<]j3TROg4q','id13248042_wp_3f2c7207ac659fe00f10525d8d80fde4');
      mysqli_query($db, "SET NAMES utf8");
      $qstr = "INSERT INTO message(subID , content, date, memberID , type , subject) VALUES('$subID','$content', '$current_time', '$memberID' , '2' , '$subject')";
      $data = mysqli_query($db,$qstr);
      header("location:index.php");
    }
  }else{
    header("location:index.php");
  }
  
?>