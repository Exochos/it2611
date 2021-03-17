<?php
    session_start();
    if (!isset($_SESSION)) {
        header('Location:register.php');
    }
    else {
        echo 'Hi, <b> ' . $_SESSION['username'] . '</b> Thanks for logging in!';
        echo '<br>';
        echo $_SESSION['success'];
        echo '<br>';
    }

//    echo $_SESSION['success'] . '<br>';
  //  echo "Thanks!" . $_SESSION['username'] . " Thanks for joining us!";
?>