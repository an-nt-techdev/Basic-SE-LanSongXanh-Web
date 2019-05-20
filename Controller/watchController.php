<?php 

    $backHome = true;

    $idSong = $_GET['v'];
    // find video have id
    
    // if have result
    if ($idSong != null)
    {
        $backHome = false;
        require_once SITE_ROOT.'/View/watch.php';
    }
    else if ($backHome)
    {
        require_once SITE_ROOT."/Controller/homeController.php";
    }

        
?>