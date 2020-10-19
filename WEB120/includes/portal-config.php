<?php 
//place URL & labels in the array here for navigation:
    $nav1['index.php'] = "Welcome";
    $nav1['big/index.php'] = "Big";
    $nav1['aia.php'] = "AIA";
    $nav1['flowchart.php'] = "Flowchart";
    $nav1['fp/index.php'] = "Final Project";
    $nav1['contactme.php'] = "Contact Clay";

/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//prevents data from being sent early
ob_start();

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;



switch(THIS_PAGE){

    case 'index.php':
        $title = "Clay's WEB120 Title Page";
        $logo = 'fa-home';
        $PageID = 'Welcome';
        $logo_color = ' style="color:#00adb5"';
    break;

    case 'aia.php':
        $title = "Clay's WEB120 AIA Page";
        $logo = 'fa-universal-access';
        $PageID = 'AIA';
        $logo_color = ' style="color:#00adb5"';
    break;

    case 'contactme.php':
        $title = "Clay's WEB120 Contact Page";
        $logo = 'fa-paper-plane-o';
        $PageID = 'Contact Clay';
        $logo_color = ' style="color:#00adb5"';
    break;

    case 'flowchart.php':
        $title = "Clay's Flowchart Page";
        $logo = 'fa-pencil-square-o';
        $PageID = 'Clay\'\s Flowchart';
        $logo_color = ' style="color:#00adb5"';
    break;
    
    default:
        $title = THIS_PAGE;
        $logo = ''; //no icon by default
        $PageID = 'Welcome';
        $logo_color = ''; //make logo_color an empty string by default

}

/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}



?>