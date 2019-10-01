<script>
    $('#testButton').click(function(e)){
    $.ajax(
    {
        type: 'GET',  //whats your request type
        url: "includes/functions.php",  // whats your php file
        data: {'random' : true}, //what data are you sending via JSON
        dataType:"json", // what type of data are you getting back
        success: function(data)
        {
            $('div #target_div').html(data)//what are you going to do with what you get
        },
        error: function(result)
        {
            alert("failed to get data");//what to do if it fails
        }
}); // Ajax close
return false;
}
</script>
<div class="row" style="padding-top:15px; margin-right: 0px; margin-left: 0px;">
  <button id="testButton" type="button" class="mx-auto btn btn-dark" >Generate Random Comic</button>
</div>
<div class="row" style="margin-right: 0px; margin-left: 0px;">
  <div class="mx-auto" style="padding:20px" id="target_div">
  <div> <?php getRandTitle(); ?> </div>
    <img style="width:auto; height: auto;" src = <?php imageRand(); ?>>
</div>