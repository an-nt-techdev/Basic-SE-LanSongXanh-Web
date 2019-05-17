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

        $data;// = $infor->getSinger($_GET['singer']); 
        //if (is_null($data->getUserName_id())) goto backHome;
        
        require_once SITE_ROOT.'/View/infor.php';
    }
    // if composer
    elseif (isset($_GET['composer']))
    {
        $backHome = false;
        $kind = 'composer';

        $data = $infor->getComposer($_GET['composer']); 
        //if (is_null($data->getUserName_id())) goto backHome;
        echo 'ok';
        require_once SITE_ROOT.'/View/infor.php';
    }
    // if user
    elseif (isset($_GET['user'])) 
    {
        $back = false;
        $kind = 'user';
        
        $data = $infor->getAccountDetail($_GET['user']);        
        //if (is_null($data->getUserName_id())) goto backHome;

        require_once SITE_ROOT.'/View/infor.php';
    }

    if ($backHome)
    {
        backHome:
        header("Location: http://localhost/LanXongXanh/");
    }
            
?>