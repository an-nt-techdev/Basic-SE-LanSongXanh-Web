<?php 

    require_once SITE_ROOT."/Services/AccountService.php";
    require_once SITE_ROOT."/Services/ArtistService.php";

    class inforModel {
        private $account;
        private $artist;

        public function __construct()
        {
            $this->account = new AccountService();
            $this->artist = new ArtistService();
        }

        public function getAccount($username)
        {
            return $this->account->getAccount($username);
        }

        public function getAccountDetail($username)
        {
            return $this->account->getAccountDetail($username);
        }


    }

?>