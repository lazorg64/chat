<?php
include("view/header.php");

// Скрипт проверки


# Соединямся с БД

mysql_connect("localhost", "root", "")or die(mysql_error());;

mysql_select_db("test");

if (isset($_COOKIE['id']) and isset($_COOKIE['hash']))

{

    $query = mysql_query("SELECT *,INET_NTOA(user_ip) FROM users WHERE user_id = '".intval($_COOKIE['id'])."' LIMIT 1");

    $userdata = mysql_fetch_assoc($query);


    if(($userdata['user_hash'] !== $_COOKIE['hash']) or
       ($userdata['user_id'] !== $_COOKIE['id']) and
       ($userdata['user_ip'] !== "0"))

    {

        setcookie("id", "", time() - 3600*24*30*12, "/");

        setcookie("hash", "", time() - 3600*24*30*12, "/");

        print "Хм, что-то не получилось";

    }

    else

    {

        print "Привет, ".$userdata['user_login'].". Всё работает!";

    }

}

else

{

    print "Включите куки";

}

?>


<?php
include("view/footer.php");
?>