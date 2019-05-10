<?php 

    $backHome = true;

    if (isset($_GET['v']))
    {
        $id = $_GET['v'];

        $backHome = false;
        require_once('View/watch.php');
    }
    
    if ($backHome)
    {
        header("Location: http://localhost/LanXongXanh/");
    }

        
?>