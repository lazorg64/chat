<?php
    error_reporting(0);


    $action = $_GET['action'];
    switch($action)
    {
        default:
            include("controller/index.php");
            break;
        case "login":
            include("controller/login.php");
            break;
        case "room":
            include("controller/room.php");
            break;
    }






?>
