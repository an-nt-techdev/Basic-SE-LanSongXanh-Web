<?php
	class AccountDetail
	{
		private $username_id;
		private $name;
		private $birthday;
		private $sex;
		private $email;

		public function __construct($Username_id, $Name, $Birthday, $Sex, $Email)
		{
			$this->username_id = $Username_id;
			$this->name = $Name;
			$this->birthday = $Birthday;
			$this->sex = $Sex;
			$this->email = $Email;
		}

		public function getUsername_id()
		{
			return $this->username_id;
		}

		public function setUsername_id($Username_id)
		{
			$this->username_id = $Username_id;
		}

		public function getName()
		{
			return $this->name;
		}

		public function setName($Name)
		{
			$this->name = $Name;
		}

		public function getBirthday()
		{
			return $this->birthday;
		}

		public function setBirthday($Birthday)
		{
			$this->birthday = $Birthday;
		}

		public function getSex()
		{
			return $this->sex;
		}

		public function setSex($Sex)
		{
			$this->sex = $Sex;
		}

		public function getEmail()
		{
			return $this->email;
		}

		public function setEmail($Email)
		{
			$this->email = $Email;
		}
	}
?>