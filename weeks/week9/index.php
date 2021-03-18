<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header('Location:login.php');
    }
    else {
        echo 'Hi, <b> ' . $_SESSION['username'] . '</b> Thanks for logging in!';
        echo '<br>';
        echo $_SESSION['success'];
        echo '<br>';
    }

 echo '<a href="logout.php" >Logout</a>';

//    echo $_SESSION['success'] . '<br>';
  //  echo "Thanks!" . $_SESSION['username'] . " Thanks for joining us!";
?>