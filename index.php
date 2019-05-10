<?php 

require_once ("Config/Config.php");
date_default_timezone_set('Asia/Ho_Chi_Minh');
$homeUrl = $_SERVER['REQUEST_URI'];

if  (isset($_GET['page']))
{
	$page = $_GET['page'];
	switch ($page)
	{
		case 'ad': 
			require_once SITE_ROOT."/View/ad/index.php";
			break;
			
		case 'infor':
			require_once("Controller/inforController.php");
			break;

		case 'rank': 
			require_once("Controller/rankController.php");
			break;

		case 'search': 
			require_once("Controller/searchController.php");
			break;

		case 'watch': 
			require_once("Controller/watchController.php");
			break;

		default:
			goto loadHome;
	}
}
else
{
    loadHome:	
	require_once("Controller/homeController.php");
}

?>