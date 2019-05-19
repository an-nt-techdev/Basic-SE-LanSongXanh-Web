<?php 

require_once SITE_ROOT."/Model/dashboardModel.php";

$dashboard = new DashboardModel();
$kind;

if (isset($_GET['k'])) {

    $kind = $_GET['k'];

    // 
    // Dashboard Singer
    //
    if ($kind == 'singer') {

        if (isset($_POST['name']))
        {
            //echo var_dump(new Singer($_POST['name'], $_POST['linkImage'], $_POST['detail']));
            $dashboard->addSinger(new Singer(0, $_POST['name'], $_POST['linkImage'], $_POST['detail']));
        }
        elseif (1)
        {

        }        
    }

    //
    // Dashboard Composer
    //
    else if ($kind == 'composer') {

        if (isset($_POST['name'])) {
            //echo var_dump(new Composer(1, $_POST['name'], $_POST['linkImage'], $_POST['detail']));
            $dashboard->addComposer(new Composer(0, $_POST['name'], $_POST['linkImage'], $_POST['detail']));
        }
        elseif (1) {

        }   
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
else {
    adSong:
    $kind = 'song';

    // Insert song
    if (isset($_POST['name']))
    {
        $dashboard->addSong(new Song(0, $_POST['name'], $_POST['composer'], $_POST['singer'], $_POST['link']));
    }
    // Remove song
    elseif (isset($_GET['removeId']))
    {
        $dashboard->deleteSong($_GET['removeId']);
    }
}

//
// Get All Data
//
$listSong = $dashboard->getAllSong();
$listSinger = $dashboard->getAllSinger();
$listComposer = $dashboard->getAllComposer();
$listAccount;

//$tmp = (int)($listSong[0]->getSinger_id());
//echo $dashboard->getSingerById($tmp);
//getComposer_id()

require_once SITE_ROOT.'/View/dashboard.php';
?>