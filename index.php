<?php 

require_once __DIR__."Config/Config.php";
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
			
		case 'baidang': 
			require_once SITE_ROOT."/Controller/BaiDang_Controller.php";
			break;
		
		default:
			goto loadHome;
	}
}
else
{
    loadHome:
	//require_once SITE_ROOT."/Controller/BangTin_Controller.php";
	require_once SITE_ROOT."View/";
}

?>