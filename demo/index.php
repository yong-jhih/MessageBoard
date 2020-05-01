<?php
    include_once 'statusBar.php';
    ini_set('display_errors','off'); 
    $db=mysqli_connect('localhost','root','','guestbook');
    mysqli_query($db, "SET NAMES utf8");
    $memberName=$_SESSION['memberName'];
    $now_time = date("Y-m-d H:i:s");
    
    if($_POST['type']==1){
        $search = $_POST['postID'];
    }elseif($_POST['type']==2){
        $search = $_POST['subID'];
    }

    if(!isset($search)){ // 非查詢(全部貼文)
        
        // 主文查詢
        $qstr = "SELECT a.* , b.Face , b.memberName FROM message as a , member as b WHERE a.memberID = b.memberID AND type='1' ORDER BY postID DESC";
        $data = mysqli_query($db,$qstr);
        $m = array();
        $i = 0 ;
        while ($i<$data->num_rows){
            $m[$i]= mysqli_fetch_assoc($data);
            $i++;
        }

        //回覆查詢
        $qstr = "SELECT a.* , b.Face , b.memberName FROM message as a , member as b where a.memberID = b.memberID AND type='2' ORDER BY postID";
        $data = mysqli_query($db,$qstr);
        $r=array();
        $j=0;
        while ($n<$data->num_rows){
            $r[$j]= mysqli_fetch_assoc($data);
            $j++;
        }

    }else{ // 查詢(目標貼文)

        // 主文查詢
        $qstr = "SELECT a.* , b.Face , b.memberName FROM message as a , member as b where a.memberID = b.memberID AND type='1' AND postID='$search' ORDER BY postID DESC";
        $data = mysqli_query($db,$qstr);
        $m = array();
        $i = 0 ;
        while ($i<$data->num_rows){
            $m[$i]= mysqli_fetch_assoc($data);
            $i++;
        }

        //回覆查詢
        $qstr = "SELECT a.* , b.Face , b.memberName FROM message as a , member as b where a.memberID = b.memberID AND type='2' ORDER BY postID";
        $data = mysqli_query($db,$qstr);
        $r=array();
        $j=0;
        while ($n<$data->num_rows){
            $r[$j]= mysqli_fetch_assoc($data);
            $j++;
        }
        
    }

    require_once 'smarty_ini.php';
    $smarty->assign("passed",$_SESSION['passed']);
    $smarty->assign("post_array",$m);
    $smarty->assign("reply_array",$r);
    $smarty->display('index.tpl');
    
    include_once 'footer.php';

?>