<?php
    include_once 'statusBar.php';
    require_once('db_config.php');
    require_once('function.php');

    $db=create_connection($dbhost,$user,$password,$database);
    $memberName=$_SESSION['memberName'];
    $now_time = date("Y-m-d H:i:s");
    
    if($_POST['type']==1){
        $search = $_POST['postID'];
    }elseif($_POST['type']==2){
        $search = $_POST['subID'];
    }

    $qstr = "SELECT a.* , b.Face , b.memberName FROM message as a , member as b WHERE a.memberID = b.memberID ";
    $m = array();
    $r=array();
    $i = 0 ;
    $j=0;
    
    if($_POST['action']!='search'){ // 非查詢(全部貼文)
        
        // 主文查詢
        $qstrm = $qstr."AND type='1' ORDER BY postID DESC";
        $data = execute_db($db, $database, $qstrm);
        while ($i<$data->num_rows){
            $m[$i]= mysqli_fetch_assoc($data);
            $i++;
        }

        //回覆查詢
        $qstrr = $qstr."AND type='2' ORDER BY postID";
        $data = execute_db($db, $database, $qstrr);
        while ($j<$data->num_rows){
            $r[$j]= mysqli_fetch_assoc($data);
            $j++;
        }

    }elseif($_POST['action']=='search'){ // 查詢(目標貼文)

        // 主文查詢
        $qstrm = "AND type='1' AND postID='$search' ORDER BY postID DESC";
        $data = execute_db($db, $database, $qstrm);
        while ($i<$data->num_rows){
            $m[$i]= mysqli_fetch_assoc($data);
            $i++;
        }

        //回覆查詢
        $qstrr = $qstr."AND type='2' ORDER BY postID";
        $data = execute_db($db, $database, $qstrr);
        while ($n<$data->num_rows){
            $r[$j]= mysqli_fetch_assoc($data);
            $j++;
        }
    }

    require_once 'smarty_ini.php';
    $smarty->assign("passed",$_SESSION['passed']);
    $smarty->assign("memberName",$memberName);
    $smarty->assign("post_array",$m);
    $smarty->assign("reply_array",$r);
    $smarty->display('index.tpl');
    
    include_once 'footer.php';

?>