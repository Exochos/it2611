<?php

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Seattles Best Houses">
    <meta name="author" content="Jeremy Ward">

    <title>Seattles Best Houses</title>
    <!-- Bootstrap core CSS + Fontawesome-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>
    <script
        src="https://code.jquery.com/jquery-3.6.0.slim.js"
        integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY="
        crossorigin="anonymous"></script>
    <link href="css/css.css" rel="stylesheet">
  </head>

  <body>
    <!-- Begin Header -->
    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#"><img src="images/home.png" alt="home icon" height="50"><b> Seattles Best Houses </b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
          <?=makeLinks($nav)?>  
          </ul>
          <ul class="navbar-nav mr-auto">
          <?php
            if (isset($_SESSION['username'])) {
              echo "<li> Welcome ";
              echo $_SESSION['username'];
              echo "</li>";
            }
          ?>
        </div>
      </nav>
    </header>
    <!-- End Header -->