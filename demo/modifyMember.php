<?php
    include_once 'statusBar.php';
    ini_set('display_errors','off');

    $memberAC = test_input($_POST['memberAC']);
    $memberID= $_SESSION['memberID'];
    $memberPWL = strlen($_POST['memberPW']);
    $memberPW = (string)md5(strrev(test_input($_POST['memberPW']).$memberAC),);
    $memberName = test_input($_POST['memberName']);
    $memberMail = test_input($_POST['memberMail']);

    if(isset($_SESSION['passed'])){
        if($memberName == $_POST['memberName'] && $memberMail == $_POST['memberMail']){
            $db=mysqli_connect('localhost','id13248042_wp_3f2c7207ac659fe00f10525d8d80fde4','jQLpbv<]j3TROg4q','id13248042_wp_3f2c7207ac659fe00f10525d8d80fde4');
            mysqli_query($db, "SET NAMES utf8");
            $qstr = "UPDATE member SET memberPW='$memberPW',memberName='$memberName',email='$memberMail' WHERE memberID='$memberID'";
            $data = mysqli_query($db,$qstr);
            setcookie('memberName',$memberName);
            $_SESSION['memberName']=$memberName;
            header("location:member.php");
        }
    }else{
        header("location:index.php");
    }
?>

