<?php
    include_once 'statusBar.php';
    require_once 'smarty_ini.php';
    require_once 'db_config.php';
    require_once 'function.php';
    
    if($_SESSION['passed'] && $_SESSION['permission']==1 || $_SESSION['permission']==0){
        
        // 查詢會員資料
        $memberID= $_SESSION['memberID'];
        $db=create_connection($dbhost,$user,$password,$database);
        $qstr = "SELECT * FROM member WHERE memberID='$memberID'";
        $data = execute_db($db, $database, $qstr);
        $r = mysqli_fetch_assoc($data);

        $memberName = $r['memberName'];
        $memberAC = $r['memberAC'];
        $email = $r['email'];
        $Face = $r['Face'];
        $pwl = (int)$_SESSION['memberPWL'];
        $pw = "";
        for ($i = 0; $i < $pwl; $i++) {
            $pw = $pw . "*";
        }
        $member=array($memberAC,$pw,$memberName,$email,$Face);
        $smarty->assign("member",$member);

        // 會員文章查詢
        if($_SESSION['permission']==1){
            $qstr = "SELECT a.* , b.memberName FROM message as a , member as b where a.memberID = b.memberID AND a.memberID = '$memberID' ORDER BY postID";
        }elseif($_SESSION['permission']==0){
            $qstr = "SELECT a.* , b.memberName FROM message as a , member as b where a.memberID = b.memberID ORDER BY postID";
        }
        $data = execute_db($db, $database, $qstr);
        $p = array();
        $j = 0 ;
        if($data->num_rows!=0){
            while ($j<$data->num_rows){
                $p[$j]=mysqli_fetch_assoc($data);
                $j++;
            }
        }
        $smarty->assign("post_array",$p);
        
        // 會員管理員切版
        if($_SESSION['permission']==1){
            $smarty->assign("permission","1");
        }elseif($_SESSION['permission']==0){   
            $smarty->assign("permission","0");
        }
        $smarty->display('member.tpl');
        include_once 'footer.php';

    }else{
        header("location:index.php");
        exit();
    }
?>