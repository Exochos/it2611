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
        echo '<main role="main" class="container"><!-- Container -->
        <div class="row"><!-- Row -->
          <div class="col-sm-8">';
            echo ' Welcome ' . $_SESSION['username'] . '</div>';
          
        echo '
        <div class="col-sm-4">
            <aside>
          </aside>
        </div>
        </div><!-- Row -->
      </main><!-- Container -->';
    }
    include('includes/footer.php');


?>