<?php
	class Account
	{
		private $username;
		private $password;
		private $ranking;

		public function __construct($Username, $Password, $Ranking)
		{
			$this->username = $Username;
			$this->password = $Password;
			$this->ranking = $Ranking;
		}

		public function getUsername()
		{
			return $this->username;
		}

		public function setUsername($Username)
		{
			$this->username = $Username;
		}

		public function getPassword()
		{
			return $this->password;
		}

		public function setPassword($Password)
		{
			$this->password = $Password;
		}

		public function getRanking()
		{
			return $this->ranking;
		}

		public function setRanking($Ranking)
		{
			$this->ranking = $Ranking;
		}

	}
?>