<?php
    include_once 'statusBar.php';
    require_once 'db_config.php';
    require_once 'function.php';

    $memberAC = test_input($_POST['memberAC']);
    $memberID= $_SESSION['memberID'];
    $memberPWL = strlen($_POST['memberPW']);
    $memberPW = (string)md5(strrev(test_input($_POST['memberPW']).$memberAC),);
    $memberName = test_input($_POST['memberName']);
    $memberMail = test_input($_POST['memberMail']);

    if(isset($_SESSION['passed'])){
        if($memberName == $_POST['memberName'] && $memberMail == $_POST['memberMail']){
            $db=create_connection($dbhost,$user,$password,$database);
            $qstr = "UPDATE member SET memberPW='$memberPW',memberName='$memberName',email='$memberMail' WHERE memberID='$memberID'";
            $data = execute_db($db, $database, $qstr);
            setcookie('memberName',$memberName);
            $_SESSION['memberName']=$memberName;
            header("location:member.php");
        }
    }else{
        header("location:index.php");
    }
?>