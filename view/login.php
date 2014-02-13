<?php
include("view/header.php");
?>

    <script>
        $(function() {
            $("#sendbutton").button();

        });

    </script>
    <div class="ui-state-highlight ui-corner-all"><?php echo $pushlogin; ?></div>
    <div class="login">


    Добро пожаловать! <br></div>
    Регестрация <br><br>
    Введите имя пользователя. <br>
    <input TYPE="text" name="username" placeholder=" | Username"/><br>
    Введите свой логин. <br>
    <input TYPE="text" name="login" placeholder=" | Login"/><br>
    Введите пароль. <br>
    <input TYPE="text" name="pass" placeholder=" | Password"/><br>
    Повторите пароль. <br>
    <input TYPE="text" name="r_pass" placeholder=" | Repeat password"/><br>
    <form method="POST" action="index.php">
        <input type="submit" name="submit" value="Registr"/>
    </form>


<?php
include("view/footer.php");
?>