<?php

    class SongModel
    {
        private $song_id;
        private $nameSong;
        private $singer_id;
        private $singer;    
        private $imageSinger;

        public function __construct($Song_id, $NameSong, $Singer_id, $Singer, $ImageSinger)
	    {
            $this->nameSong = $NameSong;
            $this->singer = $Singer;
            $this->imageSinger = $ImageSinger;
            $this->song_id = $Song_id;
            $this->singer_id = $Singer_id;
        }
        
        public function getImageSinger()
        {
            return $this->imageSinger;
        }

        public function getNameSong()
        {
            return $this->nameSong;
        }

        public function getSong_id()
        {
            return $this->song_id;
        }

        public function getSinger_id()
        {
            return $this->singer_id;
        }

        public function getSinger()
        {
            return $this->singer;
        }

    }

?>