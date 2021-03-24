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
          <div class="col-sm-8">
            <h2><b><?php echo $alt ?></b></h2> 
            <img src="<?php echo "images/" . $pic; ?>.jpg" alt="" style="width:100%">    
                <p><?php echo $p ?></p><br>
          </div>
            
        <div class="col-sm-4">
            <aside>
              <b>Want more Houses?</b></br>
              <a href="switch.php?today=Monday">Monday</a><br>
              <a href="switch.php?today=Tuesday">Tuesday<a><br>
              <a href="switch.php?today=Wednesday">Wednesday<a><br>
              <a href="switch.php?today=Thursday">Thursday<a><br>
              <a href="switch.php?today=Friday">Friday<a><br>
              <a href="switch.php?today=Saturday">Saturday<a><br>
              <a href="switch.php?today=Sunday">Sunday<a><br>
          </aside>
        </div>
        </div><!-- Row -->
      </main><!-- Container -->';
    }
    include('includes/footer.php');


?>