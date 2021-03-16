<?php
    session_start();
    include('');

    if (!isset($_SESSION['username'])) {
        header('Location:login.php');
    }
    echo "Thanks!" . $_SESSION['username'] . " Thanks for joining us!";
?>