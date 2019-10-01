<script>
    function Ccomic(){
    $.ajax(
    {
        type: 'GET',  //whats your request type
        url: "file:///workspace/Assignment2/includes/functions.php",  // whats your php file
        data: {'link' : ""}, //what data are you sending via JSON
        dataType:"html", // what type of data are you getting back
        success: function(data)
        {
            alert(data)//what are you going to do with what you get
        },
        error: function(result)
        {
            alert("failed to get data");//what to do if it fails
        }
}); // Ajax close

}
</script>
<button onclick="Ccomic()" class="mx-auto btn btn-dark">Generate Random Comic</button>
<div><img style="width:auto; height: auto;" src = <?php imageRand(); ?>></div>
