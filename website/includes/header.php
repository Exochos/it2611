  
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $title; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/lightbox.min.css">
  <link rel="stylesheet" href="css/lightbox.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/fontawesome.min.css">
  <script src="js/lightbox.js"></script>
</head>
<body class="<?php echo $body; ?>">
<!-- Header -->




<!-- Header will be consistant -->
<div class="jumbotron" style="margin-bottom:0">
  <h1> wardsDesign: <?php echo $title; ?> </h1>
</div>

<!-- Bootstrap navbar -->
<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light" style="position:sticky;">
 <a class="navbar-brand" href="../index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
        <!-- Make the links here -->
        <?=makeLinks($nav, $body)?>  
    </div>
  </div>
</nav>