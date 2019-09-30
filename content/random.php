<div class="row" style="padding-top:15px; margin-right: 0px; margin-left: 0px;">
  <button id="testButton" type="button" class="mx-auto btn btn-dark">Generate Random Comic</button>
</div>
  <div class="mx-auto" style="padding:20px">
    <h2>Drone Fishing</h2>
    <br>
    <h3>2019</h3>
    <br>
    echo '<img src="http://xkcd.com/614/info.0.json" onlick = getComic() />'
    </div>
</div>

<script>
    $('#testButton').click(function(e)){
    $.ajax(
    {
        type: 'post',  //whats your request type
        url: "/content/random.php",  // whats your php file
        data: {'random' : true}, //what data are you sending via JSON
        dataType:"HTML", // what type of data are you getting back
        success: function(data)
        {
            $('div #target_div').html(data)//what are you going to do with what you get
        },
        error: function()
        {
            alert("failed to get data");//what to do if it fails
        }
}); // Ajax close
return false;
})
</script>