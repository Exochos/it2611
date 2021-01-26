<?php 
    $title = 'Portal Page';
?>
<!doctype html>
<html lang="en">
<head>
    <!-- -->
    <title><?= $title ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Viewport so we can change depending on device size -->
    <meta name='viewport' content='width=device-width,initial-scale=1'>
    <!-- Style sheet & JS lives here -->
    <link rel="stylesheet" href="css/style.css"> 
    <script src="js/project.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<div class='wrapper'><!-- Wrapper for the the whole thing-->

    <!-- Header -->
    <header class='header'>
        <h1 class='title'>IT Portal Page V2.3</h1>
    </header>

    <!-- Nav -->
    <nav class='nav'>  
        <a href="#" class="icon">
            <i class="fa fa-bars"></i>
        </a>
        <div class="right">
            <a href="index.php">Home</a>
            <a href="website/switch.php">HW3 Switch</a>
            <a href="website/troubleshoot.php">HW4 Troubleshoot</a>
            <a href="website/calculator.php">HW5 Calculator</a>
            <a href="website/email.php">HW6 Email</a>
            <a href="website/gallery.php">HW7 Gallery</a>
            <a href="website/database.php">HW8 Database</a>
        </div>
    </nav>
    <!-- End Nav -->

    <!-- Sub Wrapper -->
    <div class="main">

        <!-- Menu Tab Left -->
        <menu>
            <li>Weekly class Exercises</li>
                <li>Week 2</li>
                <li><ul class="second">
                    <li><a href="var.php">var.php</a></li>
                    <li><a href="heredoc.php">heredoc.php</a></li>
                    <li><a href="currency.php">currency.php</a></li>
                    <li><a href="currency-logic.php">currency-logic.php</a></li>
                </ul></li>
                <li>Week 3
                <ul class="second">
                    <li><a href="includes/data-types.php">data-types.php</a></li>
                    <li><a href="weeks/week3/switch.txt">switch.php</a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a><br></li>
                    <li></li>
                </ul>
        </menu>
        <!-- End Menu Tab Left -->

        <main class='centerA'>
           <h1>My Homework Assignments:</h1><br>
           <h3>MAMP homework</h3><br>
           <a href="includes/info.php">Info.php page here to verify MAMP deployment</a><br>
           <a href="https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-20-04">Information I used to install everything</a><br>
           <img src="images/jeremyerror.png" alt="error1">
           <img src="images/jeremydisplayerrors.png" alt="error2">
        </main>
        <aside>
        <h2>About Me:</h2>
        <p>
            <img src="images/Jeremy-Profile2.png" style="width:50%;float:right;" alt="Picture of Jeremy Ward">
            Hi! My name is Jeremy Ward I grew up in California and moved up to the greater Seattle area when I was 9 and have lived here ever since.
            I initially went to College at Shoreline CC back in 2000 for Computer Science but dropped out cause my mother moved and never got back into it.
            Its only been in the last couple of years that I have had the fortitude to get myself back into Computer Science. Now that I'm back into it however I
            am very much enjoying myself with HTML javascript, python, java, and all the rest of the stuff, and now hopefully PHP. :)<br>
            I should be getting myself a puppy soon if all goes well and hoping that covid / coups are over soon.
        </p>
        </aside>
</div>
<footer>
    Jeremy Ward	&copy; <?php echo date('Y'); ?>
    <br>

                <a href="http://validator.w3.org/check?uri=referer">HTML</a>
                <a href="http://jigsaw.w3.org/css-validator/check?uri=referer">CSS</a>
</footer>
</div><!-- End wrapper for the the whole thing-->
<script>
    $(document).ready(function(){
      $("nav").click(function(){
      $("menu").toggle(1000);
        });
    });
</script>
</body>

</html>