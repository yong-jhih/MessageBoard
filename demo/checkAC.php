<?php
    ini_set('display_errors','off');

    $testAC=$_POST['newAC'];
    $db=mysqli_connect('localhost','root','','guestbook');
    $qstr = "SELECT memberAC from member WHERE memberAC='$testAC'";
    $data = mysqli_query($db,$qstr);

    if($data->num_rows!=0){
        header('Content-Type: application/json; charset=utf-8');
        echo  json_encode($testAC);
    }
?>