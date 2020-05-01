<?php
    session_start();

    setcookie('passed',null);
    setcookie('memberName',null);

    session_destroy();
    header("location:index.php");
    exit();
?>