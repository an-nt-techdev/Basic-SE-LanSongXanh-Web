<?php 

    require_once SITE_ROOT."/Services/AccountService.php";
    require_once SITE_ROOT."/Services/ArtistService.php";

    class InforModel {
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

        public function editAccount($username)
        {
            return $this->account->editAccount($username);
        }

        public function getAccountDetail($username)
        {
            return $this->account->getAccountDetail($username);
        }

        public function editAccountDetail($username)
        {
            return $this->account->editAccountDetail($username);
        }

        public function getComposer($nameComposer)
        {
            return $this->artist->getComposerByName($nameComposer);
        }

        public function getComposerById($id)
        {
            return $this->artist->getComposerById($id);
        }

        public function getSinger($nameSinger)
        {
            return $this->artist->getSinger($nameSinger);
        }

        public function getSingerById($id)
        {
            return $this->artist->getSingerById($id);
        }
    }

?>