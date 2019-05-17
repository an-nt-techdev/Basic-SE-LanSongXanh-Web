<?php 

    $backHome = true;

    $id = $_GET['v'];
    // find video have id
    
        
    
    // if have result
    if (1)
    {
        $backHome = false;
        require_once SITE_ROOT.'/View/watch.php';
    }
    
    if ($backHome)
    {
        header("Location: http://localhost/LanXongXanh/");
    }

        
?>