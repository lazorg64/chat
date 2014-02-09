<?php
    error_reporting(0);
    include("view/header.php");

    $action = $_GET['action'];
    if($action == null)
    {
        echo "NULL";
    }
    else
    {
        echo "NOT NULL";
    }





    include("view/footer.php");
?>
