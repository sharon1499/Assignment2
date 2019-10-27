<script>
    $('#button').click(function(){
    $.ajax(
    {
        type: 'POST',  //whats your request type
        url: "../includes/functions.php",  // whats your php file
        data: {"random" : true}, //what data are you sending via JSON
        dataType:"HTML", // what type of data are you getting back
        success: function(data)
        {
        document.getElementById('randComic').innerHTML = data;
            };        },
        error: function(result)
        {
            alert("failed to get data");//what to do if it fails
        }
    });
    return false;
    });
    });
</script>
<button id="generate">Generate Comic</button>
<div id='randComic'>
<div><?php imageRand(); ?></div>
</div>