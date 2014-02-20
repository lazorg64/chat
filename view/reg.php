<?php
include("view/header.php");

// Страница регситрации нового пользователя


# Соединямся с БД

mysql_connect("localhost", "root", "")or die(mysql_error());;

mysql_select_db("test");

    if(isset($_POST['submit']))

    {

        $err = array();


        # проверям логин

        if(!preg_match("/^[a-zA-Z0-9]+$/",$_POST['login']))

        {

            $err[] = "Логин может состоять только из букв английского алфавита и цифр";

        }



        if(strlen($_POST['login']) < 3 or strlen($_POST['login']) > 30)

        {

            $err[] = "Логин должен быть не меньше 3-х символов и не больше 30";

        }



        # проверяем, не сущестует ли пользователя с таким именем

        $query = mysql_query("SELECT COUNT(user_id) FROM users WHERE user_login='".mysql_real_escape_string($_POST['login'])."'");

        if(mysql_result($query, 0) > 0)

        {

            $err[] = "Пользователь с таким логином уже существует в базе данных";

        }



        # Если нет ошибок, то добавляем в БД нового пользователя

        if(count($err) == 0)

        {


            $login = $_POST['login'];



            # Убераем лишние пробелы и делаем двойное шифрование

            $password = md5(md5(trim($_POST['password'])));



            mysql_query("INSERT INTO users SET user_login='".$login."', user_password='".$password."'");

            header("Location: index.php?action=login"); exit();

        }

        else

        {

            print "<b>При регистрации произошли следующие ошибки:</b><br>";

            foreach($err AS $error)

            {

                print $error."<br>";

            }

        }

    }

?>




    <form method="POST" action="index.php?action=reg">
        <div class="regbox">
            <div class="blocktext">
                <p class="text">Введите имя пользователя</p>
                <input class="datainput ui-corner-all" TYPE="text" name="username"/>
            </div>
            <br>
            <div class="blocktext">
                <p class="text">Введите свой логин</p>
                <input class="datainput ui-corner-all" TYPE="text" name="login"/>
            </div>
            <br>
            <div class="blocktext">
                <p class="text">Придумайте пароль</p>
                <input class="datainput ui-corner-all" TYPE="password" name="password"/>
            </div>
            <br>
            <div class="blocktext">
                <p class="text">Повторите пароль</p>
                <input class="datainput ui-corner-all" TYPE="password" name="r_password"/>
            </div>
            <br>
            <input class="ui-corner-all" type="submit" name="submit" value="Регистрация"/>
        </div>

    </form>

<?php
include("view/footer.php");
?>