<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?></title>
        <link href="css/styles.css?v=1.1.0" type="text/css" rel="stylesheet">
    </head>
    <body>
    <div class="container">
        <header>
            <div class="header-title">header</div>
            <h1>Jeremy's website index page</h1>
        </header>
        <nav id='menu'>
        <input type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label>
            <?=makeLinks($nav)?>   
        </nav>