<?php
$header = "Комната ".$_GET['id'];
$q = "SELECT name FROM rooms WHERE id='".$_GET['id']."';";
$result = mysql_query($q,$link);
$row = mysql_fetch_row ($result);
$roomname = $row[0];
$q = "SELECT username,date,message FROM messages WHERE roomid='".$_GET['id']."';";
$result = mysql_query($q,$link);
$messages = $result;



include("view/room.php");
?>