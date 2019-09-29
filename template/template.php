<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title><?php page_title(); ?></title>
  </head>
  <body style="padding-bottom: 75px;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

     <a class="navbar-toggler navbar-brand" href="http://csu-assignment2.herokuapp.com">
     <i class="fa fa-2x fa-home">
     ::before ==$0
     </i></a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
     </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a><?php nav_menu(); ?></a>
    </div>
  </div>
</nav>
    <div class="jumbotron">
    <h1>Comic Generator!</h1>
    </div>
<?php page_content(); ?>
</body>
</html>