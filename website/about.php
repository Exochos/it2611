
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
                    </div>
                    <aside>
                    </aside>
                </div>
        </div><!-- end main -->
            <div class="right"></div>
        </div>  
<?php include('footer.php'); ?>
</body>
</html>