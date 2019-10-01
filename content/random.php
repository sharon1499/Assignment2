<script>
    function comic(){
    $.ajax(
    {
        type: 'GET',  //whats your request type
        url: "file:///workspace/Assignment2/includes/functions.php",  // whats your php file
        data: {'link' : ""}, //what data are you sending via JSON
        dataType:"HTML", // what type of data are you getting back
        success: function(data)
        {
            alert(data)//what are you going to do with what you get
        },
        error: function()
        {
            alert("failed to get data");//what to do if it fails
        }
}); // Ajax close

}
</script>
<div class="row" style="padding-top:15px; margin-right: 0px; margin-left: 0px;">
  <button id="testButton" type="button" onclick="comic()" class="mx-auto btn btn-dark">Generate Random Comic</button>
</div>
<div class="row" style="margin-right: 0px; margin-left: 0px;">
	<div class="mx-auto" style="padding:20px">
    <img style="width:auto; height: auto;" src = <?php ImageRand(); ?>>
    </div>
    </div>
