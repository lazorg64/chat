<?php
include("view/header.php");
?>

    <script>
        $(function() {
            $( "#chat" ).draggable();
            $("#sendbutton").button();
            $("#message").addClass("ui-corner-all");
            $( "#chat" ).resizable();
        });

    </script>




    <div class="container">
        <div id="chat">

            <div class="chatblock">
                <p>Здесь чат</p>
                <p>Блок можно двигать</p>
            </div>
            <div class="editblock">

                <textarea cols="30" id="message"></textarea>
                <div id="sendbutton">Отправить</div>
            </div>

        </div>

        <div class="room">
            content
        </div>
    </div>




<?php
include("view/footer.php");
?>