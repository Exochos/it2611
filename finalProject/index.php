<?php 
    session_start();
      include('server.php');
  include('includes/config.php');
    include('includes/header.php');

    if (!isset($_SESSION['username'])) {

        echo '
        <head>
            <title>Redirecting...</title>
            <meta http-equiv="refresh" 
        content="2;URL=login.php">
        </head>
        <main role="main" class="container">
        <h2 class="mt-5">Please Log in to continue</h2>
        <p>Redirecting...</p>
      </main>';
      echo $_SESSION['username'];
      echo $_SESSION['success'];

    }
    else {
        //todo
        echo 'got here';
        echo $_SESSION['login'];
    }
    include('includes/footer.php');


?>