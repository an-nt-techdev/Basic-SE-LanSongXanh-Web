<?php
	class Playlist
	{
		private $id;
		private $name;
		private $username_id;

		public function __construct($Id, $Name, $Username_id)
		{
			$this->id = $Id;
			$this->name = $Name;
			$this->username_id = $Username_id;
		}

        public function getId()
        {
            return $this->id;
        }

        public function setId($Id)
        {
            $this->id = $Id;
        }

        public function getName()
		{
			return $this->name;
		}

		public function setName($Name)
		{
			$this->name = $Name;
		}

		public function getUsername_id()
		{
			return $this->username_id;
		}

		public function setUsername_id($Username_id)
		{
			$this->username_id = $Username_id;
		}

	}
?>