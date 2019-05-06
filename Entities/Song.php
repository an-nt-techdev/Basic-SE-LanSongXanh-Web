<?php
	class Song
	{
		private $id;
		private $nameSong;
		private $composer_id;
		private $singer_id;
		private $link;

		public function __construct($Id, $NameSong, $Composer_id, $Singer_id, $Link)
		{
			$this->id = $Id;
			$this->nameSong = $NameSong;
			$this->composer_id = $Composer_id;
			$this->singer_id = $Singer_id;
			$this->link = $Link;
		}

		public function getId()
		{
			return $this->id;
		}

		public function setId($Id)
		{
			$this->id = $Id;
		}

		public function getNameSong()
		{
			return $this->nameSong;
		}

		public function setNameSong($NameSong)
		{
			$this->nameSong = $NameSong;
		}

		public function getComposer_id()
		{
			return $this->composer_id;
		}

		public function setComposer_id($Composer_id)
		{
			$this->composer_id = $Composer_id;
		}

		public function getSinger_id()
		{
			return $this->singer_id;
		}

		public function setSinger_id($Singer_id)
		{
			$this->singer_id = $Singer_id;
		}

		public function getLink()
		{
			return $this->link;
		}

		public function setLink($Link)
		{
			$this->link = $Link;
		}
	}
?>