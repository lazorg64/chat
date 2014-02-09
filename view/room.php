<?php
include("view/header.php");
?>

    <script>
        $(function() {
            $("#sendbutton").button();

        });

    </script>


<div class="ui-state-highlight ui-corner-all"><?php echo $roomname; ?></div>




    <div class="container">


        <div class="room">
            content
        </div>

        <div id="chat">
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
    </div>




<?php
include("view/footer.php");
?>