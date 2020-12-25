<?php
    include_once 'statusBar.php';
    require_once('db_config.php');
    require_once('function.php');

    $content = test_input($_POST['content']);
    $contentID = test_input($_POST['contentID']);

    if(isset($_SESSION['passed'])){
        if($content == $_POST['content'] && $contentID == $_POST['contentID']){
            $db=create_connection($dbhost,$user,$password,$database);
            $qstr = "UPDATE message SET content='$content' WHERE postID='$contentID'";
            $data = execute_db($db, $database, $qstr);
        }
        header("location:member.php");
    }else{
        header("location:index.php");
    }
?>