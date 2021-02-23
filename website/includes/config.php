<?php 
    ob_start();
    define('THIS_PAGE',basename($_SERVER['PHP_SELF']));
    date_default_timezone_set('America/Los_Angeles');

    $nav['index.php'] = 'Index';
    $nav['about.php'] = 'About';
    $nav['daily.php'] = 'Daily';
    $nav['people.php'] = 'People';
    $nav['contact.php'] = 'Contact';
    $nav['gallery.php'] = 'Gallery';

    $page = 'switch.php';
    $title = '';        
    
    switch(THIS_PAGE) {
    
        case 'index.php' : 
            $title = "Home page of our Website Project";
            $body = 'home';
        break;
        case 'about.php' : 
            $title = "About page of our Website Project";
            $body = 'about';
        break;
        case 'daily.php' : 
            $title = "Daily page of our Website Project";
            $body = 'daily';
        break;
        case 'people.php' : 
            $title = "People page of our Website Project";
            $body = 'people';
        break;
        case 'contact.php' : 
            $title = "Contact page of our Website Project";
            $body = 'contact';
        break;
        case 'gallery.php' : 
            $title = "Gallery page of our Website Project";
            $body = 'gallery';
        break;



    }
    if (isset($_GET['today'])) {
        $day = $_GET['today'];
    }
    else {
        $day = date("l");
    }


$title = "Switch";

switch ($day) {
    case "Monday":
        $pic = 'doggo1.jpg';
        $alt = 'Havanese';
        $color = 'yellow';
        $p = 'Havanese is the national dog of Cuba. The Havanese is small in size and sturdy in structure with a tail carried over its back and ears that drop and fold. The coat is abundant, long, and silky, and comes in all colors. The Havanese has a spirited personality and a curious disposition, and is notable for its springy gait, a characteristic that distinguishes the breed from all others. The Havanese is considered an ideal family pet and a true companion dog. They are highly adaptable to almost any environment. Because of their strong social needs, Havanese will not thrive in an environment where they are isolated for several hours each day.';
        break;
    case "Tuesday":
        $pic = 'doggo2.jpg';
        $alt = 'American Lab';
        $color = 'lightyellow';
        $p = 'The Labrador Retriever, often abbreviated to Labrador, is a breed of retriever-gun dog from the United Kingdom that was developed from imported Canadian fishing dogs. The Labrador is one of the most popular dog breeds in a number of countries in the world, particularly in the Western world.';
        break;
case "Wednesday":
        $pic = 'doggo3.jpg';
        $alt = 'Italian Greyhound';
        $color = 'lightgrey';
        $p = 'The Greyhound is a breed of dog, a sighthound which has been bred for coursing game and greyhound racing. It is also referred to as an English Greyhound.
        It is a gentle and intelligent breed whose combination of long, powerful legs, deep chest, flexible spine and slim build allows it to reach average race speeds exceeding 64 kilometres per hour (40 mph). The Greyhound can reach a full speed of 70 kilometres per hour (43 mph) within 30 metres (98 ft), or six strides from the boxes, traveling at almost 20 metres per second for the first 250 metres of a race.';
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
    
function makeLinks($linkArray, $logo) {
    $myReturn = '';
    foreach($linkArray as $url => $text) {
        if($url == THIS_PAGE)
        {//selected page - add class reference
            $myReturn .= '<a class="nav-item nav-link active" href="' . $url . '"><i class="'.$logo.'" aria-hidden="true">&nbsp;</i>'.$text.'<span class="sr-only">(current)</span></a>' . PHP_EOL;
    	}else{
            $myReturn .= '<a class="nav-item nav-link" href="'. $url . '">' . $text . '</a>' . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}
    
    ?>      