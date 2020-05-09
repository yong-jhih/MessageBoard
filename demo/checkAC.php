<?php
    session_start();
    require_once('db_config.php');
    require_once('function.php');

    $testAC=$_POST['newAC'];
    $db=create_connection($dbhost,$user,$password,$database);
    $qstr = "SELECT memberAC from member WHERE memberAC='$testAC'";
    $data = execute_db($db, $database, $qstr);

    if($data->num_rows!=0){
        header('Content-Type: application/json; charset=utf-8');
        echo  json_encode($testAC);
    }
?>