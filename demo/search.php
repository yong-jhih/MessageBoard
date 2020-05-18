<?php
    include_once 'statusBar.php';
    require_once 'smarty_ini.php';
    require_once('db_config.php');
    require_once('function.php');

    $keywords = test_input($_POST['keywords']);
    $searchType = test_input($_POST['searchType']);
    if($keywords == $_POST['keywords'] && $keywords != ""){
        $db=create_connection($dbhost,$user,$password,$database);
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
        $data = execute_db($db, $database, $qstr);
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