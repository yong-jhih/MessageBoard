<?php
    include_once 'statusBar.php';
    require_once('db_config.php');
    require_once('function.php');
    require_once 'smarty_ini.php';

    $memberPWL = strlen($_POST['memberPW']);
    $memberAC = test_input($_POST['memberAC']);
    $memberPW = md5(strrev(test_input($_POST['memberPW']).$memberAC),);
    
    // 比對過濾前後資料
    if($memberAC == $_POST['memberAC']){
        $db=create_connection($dbhost,$user,$password,$database);
        $qstr = "SELECT * from member WHERE memberAC='$memberAC' AND memberPW='$memberPW'";
        $data = execute_db($db, $database, $qstr);
        if($data->num_rows!=0){
            $m= mysqli_fetch_assoc($data);
            $_SESSION['permission']=$m['permission'];
            $_SESSION['memberName']=$m['memberName'];
            $_SESSION['memberID']=$m['memberID'];
            $_SESSION['memberPWL']=$memberPWL;
            $_SESSION['passed']=true;
            $smarty->assign("permission",$m['permission']);
            $smarty->display('checkpwd.tpl');
        }else{
            echo "<script>alert('帳號密碼輸入錯誤,請重新輸入');history.back();</script>";
        }
    }else{
        $smarty->display('error.tpl');
    }
    include_once 'footer.php';
?>