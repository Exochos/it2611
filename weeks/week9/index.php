<?php
    session_start();
    //include('');
    echo 'Hi Thanks for logging in!';
    echo '<b> ' . $_SESSION['username'] . '</b><br>';
    echo ' ';

    echo $_SESSION[1];
//    echo $_SESSION['success'] . '<br>';
  //  echo "Thanks!" . $_SESSION['username'] . " Thanks for joining us!";
?>