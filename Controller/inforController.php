<?php 
    require_once SITE_ROOT."/Model/inforModel.php";
    require_once SITE_ROOT."/Entities/Account.php";
    require_once SITE_ROOT."/Entities/AccountDetail.php";
    $infor = new inforModel();
    
    $backHome = true;
    $kind = 'user';
    $data;

    // if singer
    if (isset($_GET['singer']))
    {
        $backHome = false;
        $kind = 'singer';

        $data = $infor->getSingerById($_GET['singer']); 
        //if (is_null($data->getUserName_id())) goto backHome;
        
        require_once SITE_ROOT.'/View/infor.php';
    }
    // if composer
    else if (isset($_GET['composer']))
    {
        $backHome = false;
        $kind = 'composer';

        $data = $infor->getComposerById($_GET['composer']); 
        //if (is_null($data->getUserName_id())) goto backHome;
        //echo 'ok';
        require_once SITE_ROOT.'/View/infor.php';
    }
    // if user
    else if (isset($_GET['user'])) 
    {
        $back = false;
        $kind = 'user';
        if (isset($_GET['u'])) 
        {
            $infor->editAccountDetail(new AccountDetail($_GET['user'], $_POST['name'], $_POST['birthday'], $_POST['sex'], $_POST['email']));
            $data = $infor->getAccountDetail((string)$_GET['user']);
        }
        else if (isset($_GET['pass']))
        {
            $acc = $infor->getAccount($_GET['user']);
            if ($acc->getPassword() == $_POST['password'])
            {
                if ($_POST['newPassword'] == ($_POST['againPassword'])) 
                {
                    $infor->editAccount(new Account($_GET['user'], $_POST['newPassword'], "member"));
                    $data = $infor->getAccountDetail((string)$_GET['user']);
                }   
            }
        }
        else 
        {
            $data = $infor->getAccountDetail((string)$_GET['user']);
        }

        require_once SITE_ROOT.'/View/infor.php';
    }

    if ($backHome)
    {
        backHome:
        header("Location: http://localhost/LanSongXanh/");
    }
            
?>