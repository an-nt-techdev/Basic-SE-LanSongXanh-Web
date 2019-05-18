<?php

    class TopWeek
    {
        private $top;
        private $song_id;

        public function __construct($Top, $Song_id)
		{
            $this->top = $Top;
            $this->song_id = $Song_id;
        }
        
        public function getTop()
        {
            return $this->top;
        }

        public function setTop($Top)
        {
            $this->top = $Top;
        }

        public function getSong_id()
        {
            return $this->song_id;
        }

        public function setSong_id($Song_id)
        {
            $this->song_id = $Song_id;
        }
    }

?>