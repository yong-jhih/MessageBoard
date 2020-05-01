<?php
    include_once 'statusBar.php';
    require_once 'smarty_ini.php';
    ini_set('display_errors','off');

    // 查詢會員資料
    $memberID= $_SESSION['memberID'];
    $db=mysqli_connect('localhost','root','','guestbook');
    $qstr = "SELECT * FROM member WHERE memberID='$memberID'";
    $data = mysqli_query($db,$qstr);
    $r = mysqli_fetch_assoc($data);

    // 會員文章筆數查詢
    $qstr = "SELECT a.* , b.memberName FROM message as a , member as b where a.memberID = b.memberID AND a.memberID = '$memberID' ORDER BY postID";
    $data = mysqli_query($db,$qstr);
    $p = array();
    $j = 0 ;
    if($data->num_rows!=0){
        while ($j<$data->num_rows){
            $p[$j]=mysqli_fetch_assoc($data);
            $j++;
        }
    }

    if($_SESSION['passed']==1){
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
    $smarty->display('member.tpl');
    include_once 'footer.php';
?>