<?php
include("view/header.php");
    $connect=mysql_connect('localhost','root','')or die(mysql_error());
    mysql_select_db('test');
    if(isset($_POST['submit']))
    {
        $username=$_POST['username'];
        $login=$_POST['login'];
        $password=$_POST['password'];
        $r_password=$_POST['r_password'];
        if($password==$r_password)
        {
            $password=md5($password);
            $query=mysql_query("INSERT INTO users VALUES ('','$username','$login','$password')") or die(mysql_error());
        }
        else die('Неверно введен пароль');
    }


    if(isset($_POST['enter']))
    {
    $e_login=$_POST['e_login'];
    $e_password=md5($_POST['e_password']);

    $query=mysql_query("SELECT * FROM users WHERE login='$e_login'");
    $user_data=mysql_fetch_array($query);
    if($user_data['password']==$e_password)
    {
       setcookie($e_login,$e_password,time()+999);
       echo "ok";
    }
    else echo "err";
    }
    ?>
    <form method="POST" action="index.php?action=reg">
        <div class="regbox">
            <div class="blocktext">
                <p class="text">Логин</p>
                <input class="datainput ui-corner-all" TYPE="text" name="e_login"/>
            </div>
            <br>
            <div class="blocktext">
                <p class="text">Пароль</p>
                <input class="datainput ui-corner-all" TYPE="password" name="e_password"/>
            </div>
            <br>
            <input class="ui-corner-all" type="submit" name="enter" value="Вход"/>
        </div>
    </form>


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

    <form method="POST" action="index.php?action=login">
    <input type="submit" name="del" value="Del"/>
    </form>
<?php
include("view/footer.php");
?>