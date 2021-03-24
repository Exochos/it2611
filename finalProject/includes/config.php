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
        $p = '';
        break;
    case "Tuesday":
        $pic = 'h2';
        $alt = '$45 million ultra-modern mansion';
        $p = '
        This Beautiful Blah BLAH
        <a href="here">Here</a>
        ';
        break;
case "Wednesday":
        $pic = 'h3';
        $alt = '';
        $p = '';
        break;
case "Thursday":
        $pic = 'doggo4.jpg';
        $alt = 'King Charles Cavilier';
        $color = 'lightgreen';
        $p = 'The Cavalier King Charles Spaniel is a small breed of spaniel classed in the toy group of The Kennel Club. Since 2000, it has grown in popularity in the United States and ranks as the 19th most popular pure-breed in the United States. It has a silky, smooth coat and commonly a smooth undocked tail. The breed is generally friendly, placid, and good with both children and other animals; however, they require much human interaction. Since they are family dogs. The expected average lifespan of a Cavalier King Charles Spaniel is between nine and fourteen years.';
        break;
case "Friday":
        $pic = 'doggo5.jpg';
        $alt = 'Golden Retriever';
        $color = 'lightgreen';
        $p = "The Golden Retriever is a medium-large gun dog that was bred to retrieve shot waterfowl. The name retriever refers to the breed's ability to retrieve shot game undamaged due to their soft mouth. Golden retrievers have an instinctive love of water, and are easy to train to basic or advanced obedience standards. The Golden Retriever was originally bred in Scotland in the mid-19th century.";
        break;
case "Saturday":
        $pic = 'doggo6.jpg';
        $alt = 'Bernese Mountain Dog';
        $color = 'peru';
        $p = 'The Bernese Mountain Dog is a giant dog breed. These dogs have roots in the Roman mastiffs. The name Sennenhund is derived from the German Senne ("alpine pasture") and Hund (hound/dog), as they accompanied the alpine herders and dairymen called Senn. Berner This breed was originally kept as a general farm dog. Large Sennenhund in the past were also used as draft animals, pulling carts.';
        break;
case "Sunday":
        $pic = 'doggo7.jpg';
        $alt = 'Dachshund';
        $color = 'thistle';
        $p = 'The dachshund also known as the wiener dog, badger dog, or sausage dog, is a short-legged, long-bodied, hound-type dog breed. They may be smooth, wire, or long-haired. The standard sized dachshund was developed to scent, chase, and flush out badgers and other burrow-dwelling animals, while the miniature dachshund was bred to hunt small animals such as rabbits and mice. In the Western United States, they have also been used to track wounded deer and hunt prairie dogs.';
        break;
default: 
    echo "Something Bad Happened";
}


?>