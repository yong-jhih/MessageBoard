<?php
    include_once 'statusBar.php';
    ini_set('display_errors','off');

    $content = test_input($_POST['content']);
    $contentID = test_input($_POST['contentID']);

    if(isset($_SESSION['passed'])){
        if($content == $_POST['content'] && $contentID == $_POST['contentID']){
            $db=mysqli_connect('localhost','root','','guestbook');
            $qstr = "UPDATE message SET content='$content' WHERE postID='$contentID'";
            $data = mysqli_query($db,$qstr);
            if($_SESSION['permission']==0){
                header("location:manager.php");
            }else{
                header("location:member.php");
            }
        }
    }else{
        header("location:index.php");
    }
?>