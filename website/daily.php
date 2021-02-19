
<?php include('config.php'); ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?></title>
        <link href="css/styles.css?v=1.1.0" type="text/css" rel="stylesheet">
        <style>

</style>

    </head>
    <body class="<?php echo $body; ?>">
    <div class="container"><!-- Begin Main -->
        <header>
            <h1>Jeremy's <?php echo $title; ?> Website</h1>
        </header>
        <nav id='menu'>
        <input type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label>
            <?=makeLinks($nav)?>   
        </nav>
        <div class="main">
            <div class="left"></div>

                <div class="submain">
                <div class="smoll">
                    <div class="small-left">
                                <h2 class="headerDog">Dog of the day for: <?php echo $day ?></h2>
                                <div class="card" style="background-color:<?php echo $color ?>;">
                                <img src="<?php echo "images/" . $pic; ?>" alt="" style="width:100%">
                                <h2><b><?php echo $alt ?></b></h2> 
                                <p><?php echo $p ?></p> 
                                Source: Wikipedia</div>
                    </div>
                    <aside>
                        <b>Want more dogs? Select another day Below!</b></br>
                        <a href="daily.php?today=Monday">Monday</a><br>
                        <a href="daily.php?today=Tuesday">Tuesday<a><br>
                        <a href="daily.php?today=Wednesday">Wednesday<a><br>
                        <a href="daily.php?today=Thursday">Thursday<a><br>
                        <a href="daily.php?today=Friday">Friday<a><br>
                        <a href="daily.php?today=Saturday">Saturday<a><br>
                        <a href="daily.php?today=Sunday">Sunday<a><br>
                    </aside>
                </div>
        </div><!-- end main -->
            <div class="right"></div>
        </div>  
<?php include('footer.php'); ?>
</body>
</html>