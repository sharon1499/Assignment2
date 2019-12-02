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
<button id="change" class="btn btn-info" style="padding:50px; display:block; margin:auto; width:50%; height:5px; font-size:50;">Generate Comic</button></div>
<div id="randomComic" class="padding-image">
<div> <?php getComicRand(); ?> </div>
</div>