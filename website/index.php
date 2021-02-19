<?php include('config.php'); ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?></title>
        <link href="css/styles.css?v=1.1.0" type="text/css" rel="stylesheet">
    </head>
    <body class="<?php echo $body; ?>">
    <div class="container">
        <header>
            <div class="header-title">header</div>
            <h1>Jeremy's website index page</h1>
        </header>
        <nav id='menu'>
        <input type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label>
            <?=makeLinks($nav)?>   
        </nav>
        <div class="main">
            <div class="left"><div class="left-title">left</div></div>

                <div class="submain">
                <div class="main-title">main</div><br>
                <div class="title"><h1>This is the content for my home page</h1><br></div>
                <div class="smoll">
                    <div class="small-left">
                        <div class="small">Article</div>

                    </div>
                    <aside>
                        <div class="sub-aside">
                            aside
                        </div>
                    </aside>
                </div>
        </div><!-- end main -->
            <div class="right"><div class="right-title">right</div></div>
        </div>  
<?php include('footer.php'); ?>
</div>
    </body>
</html>