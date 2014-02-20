<?php
include("view/header.php");
if(isset($_POST['enter']))
{
    $e_login=$_POST['e_login'];
    $e_password=md5($_POST['e_password']);

    $query=mysql_query("SELECT * FROM users WHERE login='$e_login'");
    $user_data=mysql_fetch_array($query);
    if($user_data['password']==$e_password)
    {
        echo"ok";
        $chek_user=true;
    }
    else echo "err";
}
?>
    <form method="POST" action="index.php?action=login">
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


<?php
include("view/footer.php");
?>