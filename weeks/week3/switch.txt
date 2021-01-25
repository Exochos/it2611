<?php
// Switch //
/* $weekday = array();
$weekday['1'] = 'Sunday';
$weekday['2'] = 'Monday';
$weekday['3'] = 'Tuesday';
$weekday['4'] = 'Wednesday';
$weekday['5'] = 'Thursday';
$weekday['6'] = 'Friday';
$weekday['7'] = 'Saturday';
$day2 = $weekday[rand(1,7)]; */

$day = date("l");

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
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Switch</title>
  <meta name="description" content="Switch Project for IT261">
  <meta name="author" content="Jeremy Ward">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
  border-radius: 25px;
}
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
img {
  border-radius: 25px 25px 0 0;
}
.container {
    padding: 2px 16px;
}
.header {
    font-size: 36px;
    text-shadow: 2px 2px 4px #d3d3d3;
}
.left {
    position: relative;
    left: 200px;
    height: 800px;
}
.middle {
    position: relative;
    left: 400px;
    height: 800px;
}
</style>
</head>

<body>
<span class="left">&nbsp;</span>
<span class="middle">
<h2 class="header">Dog of the day for: <?php echo $day ?></h2>

<div class="card" style="width:600px;background-color: <?php echo $color ?>;">
  <img src="<?php echo $pic ?>" alt="" style="width:100%">
  <div class="container">
    <h2><b><?php echo $alt ?></b></h2> 
    <p><?php echo $p ?></p> 
    Source: Wiki
    <a href="http://validator.w3.org/check/referer" rel="nofollow" title="Validate as HTML5">HTML5</a>
                <a href="http://jigsaw.w3.org/css-validator/validator?uri=<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" rel="nofollow" title="Validate as CSS3">CSS3</a>
  </div>
</div>

</body>
</html> 
