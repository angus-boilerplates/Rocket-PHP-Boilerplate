<?php
/*
 * This is the Navbar file, this will be your navbar
 * for the whole site, updating this file will change
 * the navbar for all pages
 */

/*
 ===============
 This function adds the "currentNavItem"
 to the approprirate page ID, ensuring the active
 page is displayed on the navigation bar ie. has the green colour
 ===============
 */
function isCurrent($pageName){
	global $NAV_PAGE;
	//If the global matches the argument set as current
	if ($NAV_PAGE == $pageName){
		echo "currentNavItem";
	}
}
?>

<nav>
	<a id="<?php isCurrent('index')?>" href="/index.php">Home</a>
	<a id="<?php isCurrent('page_2')?>" href="/page_2.php">Page 2</a>
	<a id="<?php isCurrent('page_3')?>" href="/page_3.php">Page 3</a>
</nav>