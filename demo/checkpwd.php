<?php
    include_once 'statusBar.php';
    ini_set('display_errors','off'); 

    $memberPWL = strlen($_POST['memberPW']);
    $memberAC = test_input($_POST['memberAC']);
    $memberPW = md5(strrev(test_input($_POST['memberPW']).$memberAC),);

    require_once 'smarty_ini.php';

    // 比對過濾前後資料
    if($memberAC == $_POST['memberAC']){
        $db=mysqli_connect('localhost','id13248042_wp_3f2c7207ac659fe00f10525d8d80fde4','pt124362575','id13248042_wp_3f2c7207ac659fe00f10525d8d80fde4');
        $qstr = "SELECT * from member WHERE memberAC='$memberAC' AND memberPW='$memberPW'";
        $data = mysqli_query($db,$qstr);
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