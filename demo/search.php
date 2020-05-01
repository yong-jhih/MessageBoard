<?php 
    include_once 'statusBar.php';
    require_once 'smarty_ini.php';
    ini_set('display_errors','off');

    $keywords = test_input($_POST['keywords']);
    $searchType = test_input($_POST['searchType']);
    if($keywords == $_POST['keywords'] && $keywords != ""){
        $db=mysqli_connect('localhost','root','','guestbook');
        switch($searchType){
            case "subject":
                $qstr = "SELECT a.* , b.memberName FROM message AS a , member AS b WHERE a.memberID=b.memberID AND subject LIKE '%$keywords%' ORDER BY postID";
                break;
            case "content":
                $qstr = "SELECT a.* , b.memberName FROM message AS a , member AS b WHERE a.memberID=b.memberID AND content LIKE '%$keywords%' ORDER BY postID";
                break;
            case "author":
                $qstr = "SELECT a.* , b.memberName FROM message AS a , member AS b WHERE a.memberID=b.memberID AND memberName LIKE '%$keywords%' ORDER BY postID";
                break;
            default;
        }
        $data = mysqli_query($db,$qstr);
        $r = array();
        $i=0;
        while ($i<$data->num_rows){
            $r[$i]=mysqli_fetch_assoc($data);
            $i++;
        }
    }
    
    $smarty->assign("post_array",$r);
    $smarty->display('search.tpl');
    include_once 'footer.php';
?>