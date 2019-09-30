<div>
<div class="row" style="padding-top:15px; margin-right: 0px; margin-left: 0px;">
    <button id="testButton" type="button" class="mx-auto btn btn-danger">Generate Random Comic</button>
    </div>
<div class="row" style="margin-right: 0px; margin-left: 0px;">
    <div class="mx-auto" style="padding: 20px" id="target_div">
        <h2>Mispronunciation</h2>
        <br>
        <h3>2017</h3>
        <br>
        <img style="width:100%; height: auto;" src="http://xkcd.com/614/info.0.json" alt="test">
        <<?php getComic(); ?>
        </div>
        </div>
        </div>
<script>
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