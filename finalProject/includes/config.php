<?php
    if (isset($_GET['today'])) {
        $day = $_GET['today'];
    }
    else {
        $day = date("l");
    }


switch ($day) {
    case "Monday":
        $pic = 'h1';
        $alt = '';
        $p = '
        This Beautiful
        <a href="here">Here</a> Blah Blah
        ';
        break;
    case "Tuesday":
        $pic = 'h2';
        $alt = '$45 million ultra-modern mansion';
        $p = '
        This Beautiful
        <a href="here">Here</a> Blah Blah
        ';
        break;
case "Wednesday":
        $pic = 'h3';
        $alt = '';
        $p = '';
        break;
case "Thursday":
        $pic = 'h4';
        $alt = '';
        $p = '';
        break;
case "Friday":
        $pic = 'h5';
        $alt = '';
        $p = "";
        break;
case "Saturday":
        $pic = 'h6';
        $alt = '';
        $p = '';
        break;
case "Sunday":
        $pic = 'h7';
        $alt = '';
        $p = '';
        break;
default: 
    echo "Something Bad Happened";
}


?>