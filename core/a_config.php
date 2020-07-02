<?php
/*
 * This is the config file, this is the first script loaded for every web page
 * on your site, it will setup any global variables needed etc.
 *
 * -------- GLOBAL VARIABLES ---------
 *
 * NAV_PAGE: The global variable indicating the currently selected navigation link
 * CURRENT_PAGE: The currently loaded page (for use in code; not displayed)
 * PAGE_TITLE: The title which is displayed in the Browser tab
 * PAGE_DESCRIPTION: The description of the page (appears in search results)
 * PAGE_CANONICAL: The canonical tag that is used for page directs and SEO
 * 
 * -----------------------------------
 * 
 * The comment below will appear at the top of every page on your site
 */
?>
<!--Example Website, created by Angus Goody 05/2020-->

<?php

//Setup Global defaults to avoid undefined errors (These will get overwritten)
$NAV_PAGE="index";
$CURRENT_PAGE="index";
$PAGE_TITLE="Home";
$PAGE_DESCRIPTION="Welcome to Example Website"


//Find the path of the current page
$full_path = $_SERVER["PHP_SELF"];
$first_parent = dirname($full_path);

//If the current file is in root folder we don't need it's parent directory
if ($first_parent == "/"){
	$first_parent = $full_path;
}

//Create the Canonical Tag (Change protocols etc to suit your server)
$PAGE_CANONICAL="https://".$_SERVER['SERVER_NAME'].$full_path;
//Uncomment to remove .php from canonical
//$PAGE_CANONICAL="https://".$_SERVER['SERVER_NAME'].preg_replace('/\\.[^.\\s]{3,4}$/', '', $full_path);



//Switch statement for pages
switch ($first_parent) {

	//Page 2
	case '/page2.php':
		$NAV_PAGE="page_2";
		$CURRENT_PAGE="page_2";
		$PAGE_TITLE="Page 2";
		$PAGE_DESCRIPTION="This is a description for Page 2"
		break;

	//Page 3
	case '/page3.php':
		$NAV_PAGE="page_3";
		$CURRENT_PAGE="page_3";
		$PAGE_TITLE="Page 3";
		$PAGE_DESCRIPTION="This is a description for Page 3"
		break;	
	
	//Index.php
	default:
		$NAV_PAGE="index";
		$CURRENT_PAGE="index";
		$PAGE_TITLE="Home | Example Site";
		$PAGE_DESCRIPTION="Welcome to Example Site"
		break;
}

?>
