<?php
include("view/header.php");
?>



    <div class="container">

        <div id="room1" class="roomprev">
        </div>

        <div id="room2" class="roomprev">
        </div>

        <div id="room3" class="roomprev">
        </div>

        <div id="room4" class="roomprev">
        </div>

        <div id="room5" class="roomprev">
        </div>

        <div id="room6" class="roomprev">
        </div>


    </div>

    <script>
        $( ".roomprev" ).click(function() {
            $id = $(this).attr('id');
            $loc = "?action=room&id="+$id;
            document.location.href = $loc;
        });




    </script>
<?php
include("view/footer.php");
?>