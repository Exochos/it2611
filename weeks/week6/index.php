<?php

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
// Nav Array
$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['people.php'] = 'People';
$nav['contact.php'] = 'Contact';
$nav['gallary.php'] = 'Gallery';

function makeLinks($nav) {
    $myReturn ='';
    foreach($nav as $key => $value) { //Begin foreach loop
        if(THIS_PAGE == $key) {
            $myReturn .= '<li><a class="active" href="'.$key.'">'.$value.'</a></li>';
        } // End If
        else {
            $myReturn .= '<li><a href="'.$key.'">'.$value.'</a></li>';
        }//End Else
    }// End foreach
    return $myReturn;
} // End Function
















?>


<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Index Function test with NAV</title>
  <meta name="description" content="Function Test">
  <meta name="author" content="Jeremy">
  <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
<nav>
    <ul>
        <?php echo makeLinks($nav); ?>
    </ul>
</nav>
  <script src="js/scripts.js"></script>
</body>
</html>