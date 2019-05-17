<?php
require_once SITE_ROOT."/Dao/ComposerDao.php";
require_once SITE_ROOT."/Dao/SingerDao.php";

    class ArtistService 
    {
        private $composerDao;
        private $singerDao;

        public function __construct() 
	    {
		    $this->composerDao = new ComposerDao();
            $this->singerDao = new SingerDao();
	    }

        //COMPOSER FUNCTION

        public function getAllComposer()
        {
            return $this->composerDao->getAllComposer();
        }

        public function getComposer($nameComposer)
        {
            return $this->composerDao->getComposerByName($nameComposer);
        }

        public function addComposer($composer)
        {
            $this->composerDao->insertComposer($composer);
        }

        public function editComposer($composer)
        {
            $this->composerDao->updateComposer($composer);
        }

        //SINGER FUNCTION

        public function getAllSinger()
        {
            return $this->singerDao->getAllSinger();
        }

        public function getSinger($nameSinger)
        {
            return $this->singerDao->getSingerByName($nameSinger);
        }

        public function addSinger($singer)
        {
            $this->singerDao->insertSinger($singer);
        }

        public function editSinger($singer)
        {
            $this->singerDao->updateSinger($singer);
        }

    }

?>