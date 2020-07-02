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

//Find the path of the current page
$current_path = $_SERVER["PHP_SELF"];

//Create the Canonical Tag

//Switch statement for pages
switch () {

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
