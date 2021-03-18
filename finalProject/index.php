<?php 
    //session_start();
    include('includes/config.php');
    include('includes/header.php');

    if (!isset($_SESSION['login'])) {

        echo '
        <head>
            <title>Redirecting...</title>
            <meta http-equiv="refresh" 
        content="5;URL=includes/login.php">
        </head>
        <main role="main" class="container">
        <h1 class="mt-5">             </h1>
        <p></p>
      </main>';

    }
    else {
        //todo
        echo 'got here';
        echo $_SESSION['login'];
    }
    include('includes/footer.php');


?>