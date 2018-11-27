<?php
/*
config.php

Stores configuration data for our application

*/

ob_start(); //prevents header errors
define('DEBUG',TRUE); #we want to see all errors


include 'credentials.php'; //database credentials
define('THIS_PAGE', basename ($_SERVER['PHP_SELF']));


// here are the urls and page names for our main navigation

$nav1['template.php'] = 'Template';
$nav1['db_test.php'] = 'DB Test';
$nav1['customer_list.php'] = 'Customers';
$nav1['daily.php'] = 'Daily';
$nav1['contact.php'] = 'Contact';


//default page values
$title = THIS_PAGE;
$siteName = 'Site Name';
$slogan = 'whatever';
$pageHeader = 'Developer forgot to put in pageheader';
$subHeader = 'Developer forgot to put in subheader';

switch(THIS_PAGE) {
    case 'template.php':
        $title = 'My template page';
        $pageHeader = 'Put Page ID here';
		$subHeader = 'put more info here';
        
    break;
	
        case 'customer-list.php':
        $title = 'A List of Customers';
        $pageHeader = 'Our Customers';
        $subHeader = "Don't sue us, because we are using celebrity photos!";
        
    break;
        
        
	case 'db_test.php':
        $title = 'My test page';
        $pageHeader = 'Database Test Page';
		$subHeader = 'Check this page to see if your db credentials are correct';
        
    break;
	
	case 'daily.php':
        $title = 'My Daily Page';
        $pageHeader = 'blah blah blah';
        $subHeader = 'blah blah';
        
    break;
        
    case 'contact.php';
        $title = 'My contact page';   
	    $pageHeader = 'Please contact us';
		$subHeader = 'We appreciate your feedback';
        
    break;
        
      
        
}


function myerror($myFile, $myLine, $errorMsg)
{
    if(defined('DEBUG') && DEBUG)
    {
       echo "Error in file: <b>" . $myFile . "</b> on line: <b>" . $myLine . "</b><br />";
       echo "Error Message: <b>" . $errorMsg . "</b><br />";
       die();
    }else{
		echo "I'm sorry, we have encountered an error.  Would you like to buy some socks?";
		die();
    }
}

/*makeLinks() will create navigation items from an array.

echo makeLinks($nav1);
' . xxx . '

*/
function makeLinks($nav)
{

    $myReturn = '';
    foreach($nav as $key => $value){
        
         if(THIS_PAGE == $key)
        {//current page! add active class
            $myReturn .= '
            <li class="nav-item">
                  <a class="nav-link active" href="' . $key . '">' . $value . '</a>
           </li>';

         }else//add no formattting
         {$myReturn .= '<li class="nav-item">
            <a class="nav-link" href="' . $key . '">' . value . '</a>
            </li>';
    }
 
               
    
    return $myReturn;
}//end makeLinks
}