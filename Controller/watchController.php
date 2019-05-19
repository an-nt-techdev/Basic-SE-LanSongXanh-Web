<?php 

    $backHome = true;

    $idSong = $_GET['v'];
    // find video have id
    
    // if have result
    if ($idSong != 0)
    {
        $backHome = false;
        require_once SITE_ROOT.'/View/watch.php';
    }
    
    if ($backHome)
    {
        header("Location: http://localhost/LanXongXanh/");
    }

        
?>