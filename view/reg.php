<?php
include("view/header.php");
    $connect=mysql_connect('localhost','root','')or die(mysql_error());
    mysql_select_db('test');
    if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $login=$_POST['login'];
    $password=$_POST['password'];
    $r_password=$_POST['r_password'];
    if($password==$r_password){
    $password=md5($password);
    $query=mysql_query("INSERT INTO users VALUES ('','$username','$login','$password')") or die(mysql_error());
    }
        else{
            die('Неверно введен пароль');
        }
}
?>

    <form method="POST" action="index.php?action=reg">
        <div class="regbox">
            <div class="blocktext">
                <p class="text">Введите имя пользователя</p>
                <input class="datainput ui-corner-all" TYPE="text" name="username" required/>
            </div>
            <br>
            <div class="blocktext">
                <p class="text">Введите свой логин</p>
                <input class="datainput ui-corner-all" TYPE="text" name="login" required/>
            </div>
            <br>
            <div class="blocktext">
                <p class="text">Придумайте пароль</p>
                <input class="datainput ui-corner-all" TYPE="password" name="password" required/>
            </div>
            <br>
            <div class="blocktext">
                <p class="text">Повторите пароль</p>
                <input class="datainput ui-corner-all" TYPE="password" name="r_password" required/>
            </div>
            <br>
            <input class="ui-corner-all" type="submit" name="submit" value="Регистрация"/>
        </div>
    </form>


<?php
include("view/footer.php");
?>