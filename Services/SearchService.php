<?php
    require_once SITE_ROOT."/Dao/SongDao.php";
    require_once SITE_ROOT."/Dao/SingerDao.php";
    require_once SITE_ROOT."/Dao/VoteSongDao.php";

    class SearchService 
    {
        private $songDao;
        private $singerDao;
        private $voteSongDao;

        public function __construct() 
	    {
            $this->songDao = new SongDao();
            $this->singerDao = new SingerDao();
            $this->voteSongDao = new VoteSongDao();
	    }

        //SONG FUNCTION

        public function getAllSong()
        {
            return $this->songDao->getAllSong();
        }

        public function getSongById($id)
        {
            return $this->songDao->getSongById($id);
        }

        public function getSongByName($nameSong)
        {
            return $this->songDao->getSongByNameSong($nameSong);
        }

        public function getSongByComposerId($id)
        {
            return $this->songDao->getSongByComposerId($id);
        }

        public function getSongBySingerId($id)
        {
            return $this->songDao->getSongBySingerId($id);
        }

        public function getSingerById($id)
        {
            return $this->singerDao->getSingerById($id);
        }

        public function getVoteSongById($id)
        {
            return $this->voteSongDao->getVoteSongBySongId($id);
        }

    }

?>