<?php
    session_start();
    //include('');
    print_r ($_SESSION);
    echo $_SESSION['success'] . '<br>';
    echo "Thanks!" . $_SESSION['username'] . " Thanks for joining us!";
?>