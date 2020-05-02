<?php
    include_once 'statusBar.php';
    ini_set('display_errors','off'); 

    $memberAC = test_input($_POST['memberAC']);
    $memberPW = (string)md5(strrev(test_input($_POST['memberPW']).$memberAC));
    $memberName = test_input($_POST['memberName']);
    $memberMail = test_input($_POST['memberMail']);
    
    require_once 'smarty_ini.php';

    // 比對過濾前後資料
    if($memberAC == $_POST['memberAC'] && $memberName == $_POST['memberName'] && $memberMail == $_POST['memberMail']){
        $db=mysqli_connect('localhost','id13248042_wp_3f2c7207ac659fe00f10525d8d80fde4','jQLpbv<]j3TROg4q','id13248042_wp_3f2c7207ac659fe00f10525d8d80fde4');
        mysqli_query($db, "SET NAMES utf8");
        $qstr = "INSERT INTO member (memberAC,memberPW,memberName,email) VALUES('$memberAC','$memberPW','$memberName','$memberMail')";
        $data = mysqli_query($db,$qstr);
        $smarty->display('addAC.tpl');
    }else{
        $smarty->display('error.tpl');
    }
    include_once 'footer.php';
?>