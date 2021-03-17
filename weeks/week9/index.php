<?php
    session_start();
    //include('');
    echo $_SESSION['success'] . '<br>';
    echo "Thanks!" . $_SESSION['username'] . " Thanks for joining us!";
?>