<?php
include("view/header.php");
?>



    <div class="container">

        <div id="1" class="roomprev">
            <img class="prev" src="./images/Rooms/car2.jpg">
        </div>

        <div id="2" class="roomprev">
            <img class="prev" src="./images/Rooms/9McvjGLHLJs.jpg">
        </div>

        <div id="3" class="roomprev">
            <img class="prev" src="./images/Rooms/53675368.jpg">
        </div>

        <div id="4" class="roomprev">
            <img class="prev" src="./images/Rooms/mmmm.jpg">
        </div>

        <div id="5" class="roomprev">
            <img class="prev" src="./images/Rooms/game.jpg">
        </div>

        <div id="6" class="roomprev">
            <img class="prev" src="./images/Rooms/football.jpg">
        </div>



    </div>



    <script>
        $( ".roomprev" ).click(function() {
            $id = $(this).attr('id');
            $loc = "?action=room&id="+$id;
            document.location.href = $loc;
        });

    </script>
    <script>
    $(".roomprev").hover(
      function(){
          $(this).addClass("selected");
      },function(){
          $(this).removeClass("selected");
        }
    );

    </script>
<?php
include("view/footer.php");
?>