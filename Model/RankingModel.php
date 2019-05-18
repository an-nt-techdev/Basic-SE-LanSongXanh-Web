<?php

    class RankingModel
    {
        private $top;
        private $nameSong;
        private $singer;
        private $point;

        public function __construct($Top, $NameSong, $Singer, $Point)
	    {
            $this->top = $Top;
            $this->nameSong = $NameSong;
            $this->singer = $Singer;
            $this->point = $Point;
        }
        
        public function getTop()
        {
            return $this->top;
        }

        public function getNameSong()
        {
            return $this->nameSong;
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