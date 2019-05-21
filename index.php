<?php 

require_once("Config/Config.php");
date_default_timezone_set('Asia/Ho_Chi_Minh');
$homeUrl = $_SERVER['REQUEST_URI'];

session_start();

$checkAccount = false;

// Sign in
if (isset($_POST['user']))
{
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	
	require_once SITE_ROOT."/Services/AccountService.php";
	$acc = new AccountService();
	$res = $acc->getAccount($user);
	
	// Not found
	if (!$res) echo 0;
	// Wrong Password
	elseif ($pass != $res->getPassword()) echo 0;
	// Correct
	else 
	{
		$_SESSION['user'] = $user;
		header("Location: http://localhost/LanXongXanh");
	}
}
// Sign out
elseif (isset($_GET['signOut'])) {
	session_destroy();
	header("Location: http://localhost/LanXongXanh");
}
else
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