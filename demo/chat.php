<?php
    include_once 'statusBar.php';
    ini_set('display_errors','off'); 
    $db=mysqli_connect('localhost','root','','guestbook');
    $memberName=$_SESSION['memberName'];
    // $now_time = date("Y-m-d H:i:s");

    if(isset($_SESSION['passed'])){

        // 會員文章筆數查詢
        $qstr = "SELECT a.* , b.Face , b.memberName FROM message as a , member as b WHERE a.memberID = b.memberID AND type='1' ORDER BY postID DESC";
        $data = mysqli_query($db,$qstr);
        $i=0;
        while($i<$data->num_rows){
            $r[$i] = mysqli_fetch_assoc($data);
            $i++ ;
        }

        require_once 'smarty_ini.php';
        $smarty->assign("passed",$_SESSION['passed']);
        $smarty->assign("post_array",$r);
        $smarty->display('chat.tpl');
    }else{
        header("location:index.php");
    }
    include_once 'footer.php';

?>