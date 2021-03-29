<?php

if(isset($_GET['content'])){
    $content = $_GET['content'];

    switch($content){
        case 'dashboard':   include 'content/dashboard.php'; break;
        case 'user':        include 'content/user.php'; break;
        case 'media':       include 'content/media.php'; break;
        case 'settings':    include 'content/settings.php'; break;
        case 'help':        include 'content/help.php'; break;
        default:            include 'content/dashboard.php'; break;
    }
}else{
    include 'content/dashboard.php';
}