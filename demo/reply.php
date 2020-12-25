<?php
  include_once 'statusBar.php';
  require_once('db_config.php');
  require_once('function.php');
  
  $content = test_input($_POST["reply"]);
  $current_time = date("Y-m-d H:i:s");
  $memberID = $_SESSION['memberID'];
  $memberName = $_SESSION['memberName'];
  $subID = test_input($_POST["subID"]);
  $subject = test_input($_POST["subject"]);

  if(isset($_SESSION['passed'])){
    if($content == $_POST["reply"] && $subID == $_POST["subID"]){
      $db=create_connection($dbhost,$user,$password,$database);
      $qstr = "INSERT INTO message(subID , content, date, memberID , type , subject) VALUES('$subID','$content', '$current_time', '$memberID' , '2' , '$subject')";
      $data = execute_db($db, $database, $qstr);
    }
  }
  header("location:index.php");
  
?>