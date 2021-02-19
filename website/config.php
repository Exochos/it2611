<?php 
    ob_start();
    define('THIS_PAGE',basename($_SERVER['PHP_SELF']));
    date_default_timezone_set('America/Los_Angeles');

    $nav['index.php'] = 'Home';
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
            $body = 'home';
        break;
        case 'people.php' : 
            $title = "People page of our Website Project";
            $body = 'home';
        break;
        case 'contact.php' : 
            $title = "Contact page of our Website Project";
            $body = 'home';
        break;
        case 'gallery.php' : 
            $title = "Gallery page of our Website Project";
            $body = 'gallery';
        break;



    }
    
    function makeLinks($linkArray) {
        $myReturn = '';
        foreach($linkArray as $url => $text) {
            if($url == THIS_PAGE)
            {//selected page - add class reference
                $myReturn .= '<a class="active" href="' . $url . '">' . $text . '</a>' . PHP_EOL;
            }else{
                $myReturn .= '<a href="' . $url . '">' . $text . '</a>'  . PHP_EOL;
            }    
        }
          
        return $myReturn;    
    }
    
    ?>      