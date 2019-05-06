<?php
	class HistoryVote
	{
        private $username_id;
        private $song_id;
        private $stars;

		public function __construct($Username_id, $Song_id, $Stars)
		{
            $this->username_id = $Username_id;
            $this->song_id = $Song_id;
            $this->stars = $Stars;
		}

		public function getUsername_id()
		{
			return $this->username_id;
		}

		public function setUsername_id($Username_id)
		{
			$this->username_id = $Username_id;
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