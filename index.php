

<?php
    include("model/db_connector.php");

    error_reporting(0);




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
    }


    mysql_close($link);
?>
