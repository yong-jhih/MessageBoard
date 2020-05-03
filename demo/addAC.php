<?php
    include_once 'statusBar.php';
    require_once('db_config.php');
    require_once('function.php');
    require_once 'smarty_ini.php';

    $memberAC = test_input($_POST['memberAC']);
    $memberPW = (string)md5(strrev(test_input($_POST['memberPW']).$memberAC),);
    $memberName = test_input($_POST['memberName']);
    $memberMail = test_input($_POST['memberMail']);
    
    // 比對過濾前後資料
    if($memberAC == $_POST['memberAC'] && $memberName == $_POST['memberName'] && $memberMail == $_POST['memberMail']){
        $db=create_connection($dbhost,$user,$password,$database);
        $qstr = "INSERT INTO member (memberAC,memberPW,memberName,email) VALUES('$memberAC','$memberPW','$memberName','$memberMail')";
        $data = execute_db($db, $database, $qstr);
        $smarty->display('addAC.tpl');
    }else{
        $smarty->display('error.tpl');
    }
    include_once 'footer.php';
?>