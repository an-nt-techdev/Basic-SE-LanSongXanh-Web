<?php
	class PlaylistDetail
	{
		private $playlist_id;
		private $song_id;

		public function __construct($Playlist_id, $Song_id)
		{
			$this->playlist_id = $Playlist_id;
			$this->song_id = $Song_id;
		}

        public function getPlaylist_id()
        {
            return $this->playlist_id;
        }

        public function setPlaylist_id($Playlist_id)
        {
            $this->playlist_id = $Playlist_id;
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