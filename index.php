

<?php
    include("model/db_connector.php");
    session_start();
    error_reporting(0);
    if( $_SESSION['userchek'] ==true )print "Пользователь: ".$userdata['user_login'].".";
    $action = $_GET['action'];
    switch($action)
    {
        case null:
            include("controller/index.php");
            break;
        default:
            include("controller/error.php");
            break;
        case "login":
            include("controller/login.php");
            break;
        case "room":
            include("controller/room.php");
            break;
        case "reg":
            include("controller/reg.php");
            break;
        case "check":
            include("controller/check.php");
            break;
    }


    mysql_close($link);
?>
