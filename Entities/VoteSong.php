<?php
	class VoteSong
	{
        private $song_id;
        private $stars;
        private $point;

		public function __construct($Song_id, $Stars, $Point)
		{
            $this->song_id = $Song_id;
            $this->stars = $Stars;
            $this->point = $Point;
		}

		public function getPoint()
		{
			return $this->point;
		}

		public function setPoint($Point)
		{
			$this->point = $Point;
        }
        
        public function getSong_id()
		{
			return $this->song_id;
		}

		public function setSong_id($Song_id)
		{
			$this->song_id = $Song_id;
        }
        
        public function getStars()
		{
			return $this->stars;
		}

		public function setStars($Stars)
		{
			$this->stars = $Stars;
		}

	}
?>