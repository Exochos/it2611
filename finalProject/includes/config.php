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
        $alt = 'A Queen Anne Mansion in the Heart of Downtown Seattle';
        $p = '
        Situated on a hilltop in the Queen Anne neighborhood, the Riddle-Irwin House offers views of the Space Needle, the Seattle skyline and Puget Sound from virtually every room.
        "It defines the word jaw-dropping," said listing agent Jeri P. Smith. Picture windows throughout the home and three balconies allow the sights outside the apartment to take central focus.
        <br><a href="https://www.mansionglobal.com/articles/a-queen-anne-mansion-in-the-heart-of-downtown-seattle-72871">Find out more</a>
        ';
        break;
    case "Tuesday":
        $pic = 'h2';
        $alt = 'INCOMPARABLE WATERFRONT ESTATE';
        $p = '
        Incomparable waterfront estate. Quietude and wonder. Inspiration and awe. A once-in-a-lifetime opportunity to experience Pacific Northwest coastal island living, mere minutes from one of the most rapidly appreciating cities on the planet.
        Live in the daily luxury of nature, with expansive views of outer islands and the Olympics. Kayak, paddle board and take long tidal beach walks with unparalleled privacy. A signature investment with endless possibility. Absolutely sublime.
        <br><a href="https://www.luxuryportfolio.com/Property/seattle-properties-incomparable-waterfront-estate/JCKF">Find out more</a>
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
        $alt = 'Elegant and stylish home by Boehm Design';
        $p = '
        Elegant and stylish home by Boehm Design created for the most discerning buyer in desirable Canterbury. Details throughout reflect the thoughtfulness in creating a home for comfort & sophistication. No detail was overlooked. Spacious & open floor plan. Incredible kitchen w/ Thermador appls for master chefs & eating bar for informal dining. Living Rm w/ fireplace, Dining Rm, Family Rm, 2 Master BR Ensuites are luxurious & relaxing, 2 BR Ensuites & Bonus Rm. Soaring ceilings, crown molding, motorized blinds, elevator, Carrara marble, hardwd floors, heated floors, french doors, night lights along stairwell, built-in speakers, security system, gas heat, central a/c, patio & level yard. Shops, restaurants, parks and Lake are minutes away.
        <br><a href="https://www.luxuryportfolio.com/Property/seattle-properties/UFAG">Find out more</a>
        ';
        break;
case "Friday":
        $pic = 'h5';
        $alt = 'QUINTESSENTIAL NORTHWEST HOME ON COVETED ALKI POINT';
        $p = 'A quintessential Northwest home located at the quiet end of Admiral on coveted Alki Point.
        Located above Alki Lighthouse, the view is a showstopper, with a 270-degree vista of the Puget Sound, Olympic Mountains, ferry traffic, and marine life. One of the rare properties in Seattle where you can enjoy both sunrise and sunsets.
        The heart of the home is in the gorgeously remodeled kitchen, where beauty and function combine to create an entertainers delight. The primary suite occupies the upper level with unstoppable views, a luxurious spa bath, and dual dressing rooms.
        <br><a href="https://www.luxuryportfolio.com/Property/seattle-properties-quintessential-northwest-home-on-coveted-alki-point/COIS">Find out more</a>
        ';
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