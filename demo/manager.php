<?php
    if($_SESSION['passed']){
        include_once 'statusBar.php';
        require_once 'db_config.php';
        require_once 'function.php';
        require_once 'smarty_ini.php';

        // 查詢會員資料
        $memberID= $_SESSION['memberID'];
        $db=create_connection($dbhost,$user,$password,$database);
        $qstr = "SELECT * FROM member WHERE memberID='$memberID'";
        $data = execute_db($db, $database, $qstr);
        $r = mysqli_fetch_assoc($data);

        // 會員文章查詢
        $qstr = "SELECT a.* , b.memberName FROM message as a , member as b where a.memberID = b.memberID ORDER BY postID";
        $data = execute_db($db, $database, $qstr);
        $p = array();
        $j = 0 ;
        if($data->num_rows!=0){
            while ($j<$data->num_rows){
                $p[$j]=mysqli_fetch_assoc($data);
                $j++;
            }
        }

        if($_SESSION['permission']==0){
            // 會員資料smarty
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

            // 會員文章smarty
            $smarty->assign("post_array",$p);
        }else{
            header("location:index.php");
        }
        
        $smarty->display('manager.tpl');
        include_once 'footer.php';

    }else{
        header("location:index.php");
        exit();
    }
?>
