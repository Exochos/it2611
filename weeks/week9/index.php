<?php
    session_start();
    //include('');

    echo "Thanks!" . $_SESSION['username'] . " Thanks for joining us!";
    print_r($_SESSION);
?>