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
        $alt = 'This ultra-modern home is in Hunts Point, a small affluent town on Lake Washington.';
        $p = 'A $45 million ultra-modern mansion is the most expensive home in the Seattle area.<br>
        The home sits on the shores of Lake Washington in affluent Hunts Point, about a 20-minute drive from downtown Seattle.<br>
        The 9,420-square-foot, three-bedroom mansion includes 300 feet of prime waterfront, a private boat dock, and a rooftop deck complete with a fireplace and native plant garden.<br>
        <a href="https://www.businessinsider.com/most-expensive-home-seattle-area-mansion-hunts-point-photos-2019-3">Find out more</a>
        ';
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