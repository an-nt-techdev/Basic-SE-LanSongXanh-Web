<?php 
    require_once SITE_ROOT."/Model/inforModel.php";
    $infor = new inforModel();
    
    $backHome = true;
    $kind = 'user';
    $data;

    // if singer
    if (isset($_GET['singer']))
    {
        $backHome = false;
        $kind = 'singer';

        
        require_once SITE_ROOT.'/View/infor.php';
    }
    // if composer
    elseif (isset($_GET['composer']))
    {
        $backHome = false;
        $kind = 'composer';

        $person = $_GET['composer'];        
        require_once SITE_ROOT.'/View/infor.php';
    }
    // if user
    elseif (isset($_GET['user'])) 
    {
        $back = false;
        $kind = 'user';
        
        //$data = $infor->getAccount($_GET['user']);
        $data = $infor->getAccountDetail($_GET['user']);
        //if ($data->getAccountDetail() == NULL) goto backHome;

        require_once SITE_ROOT.'/View/infor.php';
    }

    if ($backHome)
    {
        backHome:
        header("Location: http://localhost/LanXongXanh/");
    }
            
?>