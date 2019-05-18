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
    
    // Insert song
    if (isset($_POST['name']))
    {
        $this->song->addSong(new Song());
    }

    $dashboard = new DashboardModel();    
    $data = $dashboard->getAllSong();
}

require_once SITE_ROOT.'/View/dashboard.php';
?>