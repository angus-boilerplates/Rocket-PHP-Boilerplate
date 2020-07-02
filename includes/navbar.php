<?php
/*
 * This is the Navbar file, this will be your navbar
 * for the whole site, updating this file will change
 * the navbar for all pages
 */

//Will set the current navigation page to have ID/CLASS: currentNavItem
function isCurrent($pageName){
	global $NAV_PAGE;
	//If the global matches the argument set as current
	if ($NAV_PAGE == $pageName){
		echo "currentNavItem";
	}
}
?>

<nav>
	<ul>
		<li id="<?php isCurrent('index')?>"><a href="/index.php">Home</a></li>
		<li id="<?php isCurrent('page_2')?>"><a href="/page_2.php">Page 2</a></li>
		<li id="<?php isCurrent('page_3')?>"><a href="/page_3.php">Page 3</a></li>
	</ul>
</nav>