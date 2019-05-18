<?php
require_once SITE_ROOT."/Dao/SongDao.php";

    class SongService 
    {
        private $songDao;

        public function __construct() 
	    {
		    $this->songDao = new SongDao();
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

        public function addSong($song)
        {
            $this->SongDao->insertSong($song);
        }

        public function editSong($song)
        {
            $this->SongDao->updateSong($song);
        }

        public function deleteSong($id)
        {
            $this->SongDao->deleteSong($id);
        }

    }

?>