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
        $alt = 'This sophisticated floating home is winner of AIA’s “Home of Distinction” award';
        $p = 'Jewel Box // Custom designed by Vandeventer+Carlander, this sophisticated floating home is winner of AIA’s “Home of Distinction” award & has been acclaimed by notable international publications such as Dwell. Modernistic architecture, sleek wood elements, natural stone & walls of glass merge with light-filled spaces creating a magical backdrop for the lake life. A reverse floor plan opens to a trio of outdoor decks to maximize the breathtaking westerly views of Lake Union & Gasworks Park. Space abounds with moorage for two boats & a 1000sqft utility room. Located in Seattles most prized dock, this Roanoke Reef masterpiece is a rare versatile offering, serving as a pied-à-terre, full-time residence, entertaining venue or creative hideaway.
        <br><a href="https://seattleafloat.idxbroker.com/idx/details/listing/b045/NWM1735423/10-E-Roanoke-Street-3-Seattle-WA-98102?widgetReferer=true">Find out more</a>';
        break;
case "Sunday":
        $pic = 'h7';
        $alt = 'The lakefront retreat combines the best of indoor-outdoor living and technology.';
        $p = 'Waterfront living in Seattle is all about maximizing the spectacular views, and this seven-bedroom, six-and-a-half-bath retreat on Lake Washington does just that. Designed by architect Craig Stillwell and built in 2008 in the city’s sought-after Laurelhurst neighborhood, the house features clean lines, large windows, and plenty of terraces, plus Fleetwood doors that open from the family room to maximize indoor-outdoor living. At $13.25 million, the 11,800-square-foot home is also the city’s priciest listing. Located on just under an acre of land, it includes 145 feet of lakefront property. The interior has plenty of entertaining space as well, including a party room, a home theater, and a 1,200-bottle wine cellar on the lower level. And because this is one of the most tech-savvy cities in the country, the home features an elevator, NetStream touch panels and keypads for the audio/video system, a Lutron HomeWorks lighting system, and in-wall and in-ceiling Phase Technology speakers and subwoofers.<br>
        <a href="https://www.architecturaldigest.com/gallery/most-expensive-house-seattle">Find out more</a>
        ';
        break;
default: 
    echo "Something Bad Happened";
}


?>