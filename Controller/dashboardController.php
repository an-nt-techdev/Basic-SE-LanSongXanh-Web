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
        
        // update Singer
        if (isset($_GET['u']))
        {
            $dashboard->editSinger(new Singer($_POST['id'], $_POST['name'], $_POST['linkImage'], $_POST['detail']));
        }
        // insert Singer
        else if (isset($_GET['a']))
        {
            $dashboard->addSinger(new Singer(0, $_POST['name'], $_POST['linkImage'], $_POST['detail']));
        }
        // delete Singer
        else if (isset($_GET['delSinger']))
        {
            $dashboard->deleteSinger($_GET['delSinger']);
        }        
    }

    //
    // Dashboard Composer
    //
    else if ($kind == 'composer') {

        // update Composer
        if (isset($_GET['u']))
        {
            $dashboard->editComposer(new Composer($_POST['id'], $_POST['name'], $_POST['linkImage'], $_POST['detail']));
        }
        // insert Composer
        else if (isset($_GET['a']))
        {
            $dashboard->addComposer(new Composer(0, $_POST['name'], $_POST['linkImage'], $_POST['detail']));
        }
        // delete Composer
        else if (isset($_GET['delComposer']))
        {
            $dashboard->deleteComposer($_GET['delComposer']);
        }  
    }

    //
    // Dashboard Account
    //
    else if ($kind == 'account') {}
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
    else if (isset($_GET['removeId']))
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