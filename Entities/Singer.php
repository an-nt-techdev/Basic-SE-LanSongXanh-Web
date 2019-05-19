<?php
	class Singer
	{
		private $id;
		private $name;
        private $image;
        private $detail;

		public function __construct($Id, $Name, $Image, $Detail)
		{
			$this->id = $Id;
			$this->name = $Name;
            $this->image = $Image;
            $this->detail = $Detail;
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

		public function getImage()
		{
			return $this->image;
		}

		public function setImage($Image)
		{
			$this->image = $Image;
        }
        
        public function getDetail()
        {
            return $this->detail;
        }

        public function setDetail($Detail)
        {
            $this->detail = $Detail;
        }

	}
?>