<?php 
    //session_start();
    include('includes/header.php');

    if (!isset($_SESSION['login'])) {

        echo '
        <head>
            <title>Redirecting...</title>
            <meta http-equiv="refresh" 
        content="5;URL=login.php">
        </head>
        <main role="main" class="container">
        <h2 class="mt-5">Please Log in to continue</h2>
        <p>Redirecting...</p>
      </main>';

    }
    else {
        //todo
        echo 'got here';
        echo $_SESSION['login'];
    }
    include('includes/footer.php');


?>