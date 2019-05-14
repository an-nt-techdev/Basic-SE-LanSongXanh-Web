<?php
require_once SITE_ROOT."/Dao/AccountDao.php";
require_once SITE_ROOT."/Dao/AccountDetailDao.php";
require_once SITE_ROOT."/Dao/PlaylistDao.php";
require_once SITE_ROOT."/Dao/PlaylistDetailDao.php";

    class AccountService 
    {
        private $accountDao;
        private $accountDetailDao;
        private $playlistDao;
        private $playlistDetailDao;

        public function __construct() 
	    {
		    $this->accountDao = new AccountDao();
            $this->accountDetailDao = new AccountDetailDao();
            $this->playlistDao = new PlaylistDao();
            $this->playlistDetailDao = new PlaylistDetailDao();
	    }

        //ACCOUNT FUNCTION

        public function getAccount($username)
        {
            return $this->accountDao->getAccountByUsername($username)
        }

        public function getAccountDetail($username)
        {
            return $this->accountDetailDao->getAccountDetailByUsername($username)
        }

        public function addAccount($account, $accountDetail)
        {
            $this->accountDao->insertAccount($account);
            $this->accountDetailDao->insertAccountDetail($accountDetail);
        }

        public function editAccount($account)
        {
            $this->accountDao->updateAccount($account);
        }

        public function editAccountDetail($accountDetail)
        {
            $this->accountDetailDao->updateAccountDetail($accountDetail);
        }

        //PLAYLIST FUNCTION

        public function getPlaylistById($id)
        {
            $this->playlistDao->getPlaylistById($id);
        }

        public function getPlaylistByUsernameId($id)
        {
            $this->playlistDao->getPlaylistByUsernameId($id);
        }

        public function getPlaylistDetailByPlaylistId($id)
        {
            $this->playlistDetailDao->getPlaylistDetailByPlaylistId($id);
        }

        public function addPlaylist($playlist)
        {
            $this->playlistDao->insertPlaylist($playlist);
        }

        public function addPlaylistDetail($playlistDetail)
        {
            $this->playlistDetailDao->insertPlaylistDetail($playlistDetail);
        }

        public function editPlaylist($playlist)
        {
            $this->playlistDao->updatePlaylist($playlist);
        }

        public function deletePlaylist($id)
        {
            $this->playlistDao->deletePlaylist($id);
        }

        public function deletePlaylistDetail($id)
        {
            $this->playlistDetailDao->deletePlaylistDetail($id);
        }

    }

?>