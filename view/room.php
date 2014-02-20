<?php
include("view/header.php");
?>

    <script>
        $(function() {
            $("#sendbutton").button();

        });

    </script>


<div class="ui-state-highlight ui-corner-all"><?php echo $roomname; ?></div>



        <div class="room">

        </div>

    <!-- Стили для блока с сообщениями!-->
    <style>
        #messages
        {
            width:300px;
            height:900px;
            overflow:auto;
            border:1px solid silver;
        }
    </style>
    <!--Подключаем Jquery!-->
    <script type="text/javascript"src="http://www.google.com/jsapi"></script>
    <script type="text/javascript">
        //Загружаем библиотеку JQuery
        google.load("jquery", "1.3.2");
        google.load("jqueryui", "1.7.2");
        //Функция отправки сообщения
        functionsend()
        {
            //Считываем сообщение из поля ввода с id mess_to_add
            varmess=$("#mess_to_send").val();
            // Отсылаем паметры
            $.ajax({
                type: "POST",
                url: "add_mess.php",
                data:"mess="+mess,
                // Выводим то что вернул PHP
                success: function(html)
                {
                    //Если все успешно, загружаем сообщения
                    load_messes();
                    //Очищаем форму ввода сообщения
                    $("#mess_to_send").val('');
                }
            });
        }
        //Функция загрузки сообщений
        functionload_messes()
        {
            $.ajax({
                type: "POST",
                url:  "load_messes.php",
                data: "req=ok",
                // Выводим то что вернул PHP
                success: function(html)
                {
                    //Очищаем форму ввода
                    $("#messages").empty();
                    //Выводим что вернул нам php
                    $("#messages").append(html);
                    //Прокручиваем блок вниз(если сообщений много)
                    $("#messages").scrollTop(90000);
                }
            });
        }
    </script>
<div id="chat">
    <div class="chatblock">

    </div>
    <div class="editblock">
        <form action="javascript:send();">
            <input type="text"id="mess_to_send">
            <input type="button"value="Отправить">
        </form>
    </div>
   <script>
        //При загрузке страницы подгружаем сообщения
        load_messes();
        //Ставим цикл на каждые три секунды
        setInterval(load_messes,3000);
    </script>

<?php
include("view/footer.php");
/*        <div id="chat">
            <div class="chatblock">
                <?php
                while ($row = mysql_fetch_row($messages))
                {
                    echo "<div class=\"message ui-corner-all\">".$row[0]." : ".$row[2]."</div>";
                }
                ?>
            </div>
            <div class="editblock">
                <textarea cols="30" id="messageblock" class="ui-corner-all"></textarea>
                <div id="sendbutton">Отправить</div>
            </div>
        </div>


*/
?>
