<?php 

require_once("Config/Config.php");
date_default_timezone_set('Asia/Ho_Chi_Minh');
$homeUrl = $_SERVER['REQUEST_URI'];

session_start();

$checkAccount = false;

// Sign up
if (isset($_POST['username']))
{
	require_once SITE_ROOT."/Services/AccountService.php";
	$acc = new AccountService();
	$list = $acc->getAllAccount();
	$kt = true;
	foreach ($list as $l) 
	{
		if ($_POST['username'] == $l->getUsername()) 
		{
			$kt = false;
			break;
		}
	}
	if ($kt)
	{
		if ($_POST['password'] != $_POST['againPassword'])
		{
			$message = "Mật khẩu không khớp nhau!";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		else
		{
			$acc->addAccount(new Account($_POST['username'], $_POST['password'], "Member"), 
				new AccountDetail($_POST['username'], $_POST['name'], $_POST['birthday'], $_POST['sex'], $_POST['email']));
			$message = "Bạn tạo tài khoản thành công!";
			echo "<script type='text/javascript'>alert('$message');</script>";
			header("Location: /LanSongXanh");
		}
	}
	else
	{
		$message = "Tên đăng nhập đã có người sử dụng!";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
}
// Sign in
else if (isset($_GET['signin']))
{
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	
	require_once SITE_ROOT."/Services/AccountService.php";
	$acc = new AccountService();
	$list = $acc->getAllAccount();
	$kt = false;
	foreach ($list as $l) 
	{
		if ($user == $l->getUsername()) 
		{
			$kt = true;
			break;
		}
	}

	// Not found
	if ($kt == false)
	{
		$message = "Tên đăng nhập bị sai!";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
	// Wrong Password
	else 
	{
		$res = $acc->getAccount($user);
		if ($pass != $res->getPassword())
		{
			$message = "Mật khẩu bị sai!";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		// Correct
		else 
		{
			$_SESSION['user'] = $user;
			header("Location: /LanSongXanh");
		}
	}
}
// Sign out
else if (isset($_GET['signOut'])) {
	session_destroy();
	header("Location: /LanSongXanh");
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