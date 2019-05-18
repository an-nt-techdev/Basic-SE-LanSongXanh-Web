<?php 

require_once SITE_ROOT."/Model/dashboardModel.php";

$kind;
$data;

if (isset($_GET['k'])) {

    $kind = $_GET['k'];

    if ($kind == 'singer') {

    }
    elseif ($kind == 'composer') {

    }
    elseif ($kind == 'account') {

    }
    else {
        goto adSong;
    }
}
else
{
    adSong:
    
    $dashboard = new DashboardModel();

    // Insert song
    if (isset($_POST['name']))
    {
        $s = new Song(1, $_POST['name'], $_POST['singer'], $_POST['composer'], $_POST['link']);
        $dashboard->addSong($s);
    }

    $data = $dashboard->getAllSong();
}

require_once SITE_ROOT.'/View/dashboard.php';
?>