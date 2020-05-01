<?php
    if($_SESSION['passed']){
        include_once 'statusBar.php';
        require_once 'smarty_ini.php';
        ini_set('display_errors','off');

        // 查詢會員資料
        $memberID= $_SESSION['memberID'];
        $db=mysqli_connect('localhost','id13248042_wp_3f2c7207ac659fe00f10525d8d80fde4','pt124362575','id13248042_wp_3f2c7207ac659fe00f10525d8d80fde4');
        $qstr = "SELECT * FROM member WHERE memberID='$memberID'";
        $data = mysqli_query($db,$qstr);
        $r = mysqli_fetch_assoc($data);

        // 會員文章查詢
        $qstr = "SELECT a.* , b.memberName FROM message as a , member as b where a.memberID = b.memberID ORDER BY postID";
        $data = mysqli_query($db,$qstr);
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
