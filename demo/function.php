<?php

  function create_connection($dbhost,$user,$password,$database){
    $db = mysqli_connect($dbhost,$user,$password,$database) or die("無法建立資料連接: " . mysqli_connect_error());
    mysqli_query($db, "SET NAMES utf8");
    return $db;
  }
	
  function execute_db($db, $database, $qstr){
    mysqli_select_db($db, $database) or die("開啟資料庫失敗: " . mysqli_error($db));				 
    $data = mysqli_query($db, $qstr);
    return $data;
  }
  
?>