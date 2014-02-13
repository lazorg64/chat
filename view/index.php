<?php
include("view/header.php");
?>

    <div class="login">
        <div class="pushlogin">
        </div>
    </div>

    <div class="container">

        <div id="1" class="roomprev">
        </div>

        <div id="2" class="roomprev">
        </div>

        <div id="3" class="roomprev">
        </div>

        <div id="4" class="roomprev">
        </div>

        <div id="5" class="roomprev">
        </div>

        <div id="6" class="roomprev">
        </div>



    </div>

    <script>
        $( ".login" ).click(function() {
            //$id = $(this).attr('id');
            $loc = "?action=login";//&id="+$id;
            document.location.href = $loc;
        });
    </script>

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