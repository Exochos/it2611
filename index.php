<?php 
    $title = 'Portal Page';
?>
<?php include('includes/header.php'); ?>
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
                    <li><a href="weeks/week3/date.php">date.php</a></li>
                    <li><a href="weeks/week3/data-types.php">data-types.php</a></li>
                    <li><a href="weeks/week3/switch.txt">switch.php</a></li>
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
            <img src="images/Jeremy-Profile2.png" class='jeremy' alt="Picture of Jeremy Ward">
            Hi! My name is Jeremy Ward I grew up in California and moved up to the greater Seattle area when I was 9 and have lived here ever since.
            I initially went to College at Shoreline CC back in 2000 for Computer Science but dropped out cause my mother moved and never got back into it.
            Its only been in the last couple of years that I have had the fortitude to get myself back into Computer Science. Now that I'm back into it however I
            am very much enjoying myself with HTML javascript, python, java, and all the rest of the stuff, and now hopefully PHP. :)<br>
            I should be getting myself a puppy soon if all goes well and hoping that covid / coups are over soon.
        </p>
        </aside>
</div>
<?php include('includes/footer.php'); ?>