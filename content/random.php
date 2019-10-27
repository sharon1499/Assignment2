<script>
           $(document).ready(function(){
  $("button").click(function(){
                 //location.reload();
                $.ajax({
                    type: "post",
                    url: "/includes/functions.php",
                    data: {'random': true},
                    dataType: "HTML",
                    success: function (data) {
                        document.getElementById('randomComic').innerHTML = data;
                    },
                    error: function (result) {
                        alert("Error");
                    }
                });
                return false;
            });
           });
        </script>
<button id="change" >New Comic</button>
<div id="randomComic">
<div> <?php imageRand(); ?> </div>
</div>