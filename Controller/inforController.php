<?php 

    $backHome = true;

    $person = false;

    if (isset($_GET['person']))
    {
        $backHome = false;

        $person = $_GET['person'];
        $person = true;

        require_once('View/infor.php');
    }
    elseif (isset($_GET['user'])) 
    {
        $userName = $_GET['user'];

        $back = false;
        require_once('View/infor.php');
    }

    if ($backHome)
    {
        header("Location: http://localhost/LanXongXanh/");
    }
            
?>