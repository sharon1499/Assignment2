<script >
            function ChangeComic(){
                 //location.reload();
                $.ajax({
                    type: "GET",
                    url: "file:///workspace/Assignment2/includes/functions.php",
                    data: {'link': ""},
                    dataType: "html",
                    success: function (data) {
                        alert(data);
                    },
                    error: function (result) {
                        alert("Error");
                    }
                });
            }
        </script>


<div class="d-flex justify-content-center"><img src = <?php imageRand(); ?>></div>
<button onClick="ChangeComic()" >New Comic</button>