<?php 

require_once SITE_ROOT."/Model/dashboardModel.php";

$dashboard = new DashboardModel();
$kind;

// Data
$listSong = $dashboard->getAllSong();
$listSinger = $dashboard->getAllSinger();
$listComposer = $dashboard->getAllComposer();

if (isset($_GET['k'])) {

    $kind = $_GET['k'];

    // 
    // Dashboard Singer
    //
    if ($kind == 'singer') {

        if (isset($_POST['name']))
        {
            
        }

        //$data = $dashboard->getAllSinger();
    }
    //
    // Dashboard Composer
    //
    elseif ($kind == 'composer') {

    }
    //
    // Dashboard Account
    //
    elseif ($kind == 'account') {

    }
    else { goto adSong; }
}

//
// Dashboard Song
//
else
{
    adSong:
    $kind = 'song';

    // Insert song
    if (isset($_POST['name']))
    {
        $dashboard->addSong(new Song(1, $_POST['name'], $_POST['singer'], $_POST['composer'], $_POST['link']));
    }
}
echo $dashboard->getSingerById($listSong[0]->getId());
//getComposer_id()
require_once SITE_ROOT.'/View/dashboard.php';
?>