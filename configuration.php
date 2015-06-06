<?php
	#Website name
	$websiteName = "WebsiteName";

	#Development MOOD!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
	$domainName = "http://localhost/websites/Website Starter";
	
	#Domain name
	#$domainName = "http://$_SERVER[SERVER_NAME]/";
	
	#Directory root
	$root = dirname(__FILE__);
	 
	#Page url
	$pageURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]/";
	
	#Page name small letters
	$pageName = strtolower(str_ireplace(array('.php'), array(''), basename($_SERVER['PHP_SELF'])));
	
	#Page name first letter capital
	$PageName = ucwords(str_ireplace(array('-', '.php'), array(' ', ''), basename($_SERVER['PHP_SELF'])));
	
	#Add class .active to current active page
	$directoryURL = $_SERVER['REQUEST_URI'];
	$path = parse_url($directoryURL, PHP_URL_PATH);
	$components = explode('/', $path);
	$currentPage = preg_replace("/\\.[^.\\s]{3,4}$/", "", end($components));
	
	if ($currentPage == "") {
		$currentPage = "index";
	}
	function href($url) {
		global $currentPage;
		$path = explode('/', $url);
		$page = preg_replace("/\\.[^.\\s]{3,4}$/", "", end($path));
		echo 'href="' . $url . '"';
	
		if ($page == $currentPage) {
			echo ' class="active"';
		}
	}
	
	#Sitemap generator
	define('SITEMAP_DIR', './');
	//Make sure the DIR ends ups in the Sitemap Dir URL below, otherwise the links to files will be broken!
	define('SITEMAP_DIR_URL', $domainName);
	//Whether or not the script should check recursively.
	define('RECURSIVE', true);
	//The replace array, this works as file => replacement, so 'index.php' => '', would make the index.php be listed as just /
	$replace = array('index.php' => '');
	//The XSL file used for styling the sitemap output, make sure this path is relative to the root of the site.
	$xsl = 'sitemap.xsl';
	//Allowed file types:
	$filetypes = array('php', 'html');
	//Ignored files
	$ignore = array('.', '..', 'configuration.php', 'sitemap.php');
	//Change frequency for files
	$chfreq = 'monthly';
	//Priority frequency for files
	$prio = '1';
?>