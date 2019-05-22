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
    else if ($kind == 'account') {goto getAll;}
    else { goto adSong; }
}
//
//  Thống kê Tuần - Tháng
//
else if (isset($_GET['statistic']))
{
    require_once SITE_ROOT."/Services/VoteService.php";
    $ser = new VoteService();
    if ($_GET['statistic'] == "week")
    {    
        $ser->saveTopWeek();
        header("Location: /LanSongXanh/?page=ad");
    }
    else if ($_GET['statistic'] == "month")
    {
        $ser->saveTopMonth();
        header("Location: /LanSongXanh/?page=ad");
    }
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
        require_once SITE_ROOT."/Services/VoteService.php";
        require_once SITE_ROOT."/Services/SongService.php";
        require_once SITE_ROOT."/Entities/VoteSong.php";
        $vote = new VoteService();
        $s = new SongService();
        $tmp = $s->getSongByName($_POST['name']);
        $vote->addVoteSong(new VoteSong($tmp->getId(), 0, 0));
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
getAll:

$listSong = $dashboard->getAllSong();
$listSinger = $dashboard->getAllSinger();
$listComposer = $dashboard->getAllComposer();
$listAccount = $dashboard->getAllAccount();
//echo $listAccount[2]->getUsername();

//$tmp = (int)($listSong[0]->getSinger_id());
//echo $dashboard->getSingerById($tmp);
//getComposer_id()

require_once SITE_ROOT.'/View/dashboard.php';
?>