<?php

    class RankingModel
    {
        private $top;
        private $song_id;
        private $nameSong;
        private $singer_id;
        private $singer;    
        private $point;

        public function __construct($Top, $Song_id, $NameSong, $Singer_id, $Singer, $Point)
	    {
            $this->top = $Top;
            $this->nameSong = $NameSong;
            $this->singer = $Singer;
            $this->point = $Point;
            $this->song_id = $Song_id;
            $this->singer_id = $Singer_id;
        }
        
        public function getTop()
        {
            return $this->top;
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

        public function getPoint()
        {
            return $this->point;
        }
    }

?>