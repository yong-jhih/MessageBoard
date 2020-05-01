<?php
    ini_set('display_errors','off');

    $testAC=$_POST['newAC'];
    $db=mysqli_connect('localhost','id13248042_wp_3f2c7207ac659fe00f10525d8d80fde4','pt124362575','id13248042_wp_3f2c7207ac659fe00f10525d8d80fde4');
    $qstr = "SELECT memberAC from member WHERE memberAC='$testAC'";
    $data = mysqli_query($db,$qstr);

    if($data->num_rows!=0){
        header('Content-Type: application/json; charset=utf-8');
        echo  json_encode($testAC);
    }
?>