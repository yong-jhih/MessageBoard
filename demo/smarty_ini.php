<?php
    require_once '../libs/Smarty.class.php';
    $smarty = new Smarty;
    $smarty->debugging = false;
    $smarty->caching = false;
    $smarty->cache_lifetime = 0;