<?php 

require_once("Config/Config.php");
date_default_timezone_set('Asia/Ho_Chi_Minh');
$homeUrl = $_SERVER['REQUEST_URI'];

// sign in


// if have GET 'search'
if (isset($_GET['search'])) {
	require_once SITE_ROOT."/Controller/searchController.php";
}
else
	// if have GET 'v'(video)
	if (isset($_GET['v'])) {
		require_once SITE_ROOT."/Controller/watchController.php";
	}
	else
		// if have GET 'page'
		if (isset($_GET['page'])) {
			$page = $_GET['page'];
			switch ($page) {
				case 'ad': 
					require_once SITE_ROOT."/Controller/dashboardController.php";
					break;
					
				case 'infor':
					require_once SITE_ROOT."/Controller/inforController.php";
					break;

				case 'rank': 
					require_once SITE_ROOT."/Controller/rankController.php";
					break;

				case 'contact': 
					require_once SITE_ROOT."/Controller/contactController.php";
					break;

				case 'singer': 
					require_once SITE_ROOT."/Controller/artistController.php";
					break;

				case 'composer': 
					require_once SITE_ROOT."/Controller/artistController.php";
					break;

				default:
					goto loadHome;
			}
		}
		else {
			loadHome:	
			require_once SITE_ROOT."/Controller/homeController.php";
		}

?> 