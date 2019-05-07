<?php
require_once SITE_ROOT."/Config/DBCon.php";
require_once SITE_ROOT."/Entities/Singer.php";

class SingerDao extends DBConnection
{
	public function __construct() 
	{
		parent::__construct();
	}

	// public function getAllSinger()
	// {
	// 	$result = $this->runQuery("SELECT *	FROM post");
	// 	$SingerList = array();
	// 	while ($row = $result->fetch_assoc())
	// 	{
	// 		$Singer = new Singer(
	// 			$row['id'],
	// 			$row['category_id'],
	// 			$row['title'],
	// 			$row['author'],
	// 			$row['date_up'],
	// 			$row['content'],
	// 			$row['feature']
	// 		);
	// 		array_push($SingerList, $Singer);
	// 	}
	// 	$result->free();

	// 	return $SingerList;
	// }

	// public function getSingerByTitle($title)
	// {
	// 	$result = $this->runQuery("SELECT *	FROM post WHERE title = {$title}");

	// 	$row = $result->fetch_assoc();
	// 	return new Singer(
	// 		$row['id'],
	// 		$row['category_id'],
	// 		$row['title'],
	// 		$row['author'],
	// 		$row['date_up'],
	// 		$row['content'],
	// 		$row['feature']
	// 	);
	// }
	
	public function getSingerByName($Name)
	{
		$result = $this->runQuery("SELECT *	FROM Singer WHERE name = {$Name}");

		$row = $result->fetch_assoc();
		return new Singer(
			$row['id'],
            $row['name'],
            $row['image'],
            $row['detail']
		);
	}

	// public function getSingerByCategory($CategoryID)
	// {
	// 	$result = $this->runQuery("SELECT *	FROM post WHERE category_id = {$CategoryID}");

	// 	$SingerList = array();
	// 	while ($row = $result->fetch_assoc())
	// 	{
	// 		$Singer = new Singer(
	// 			$row['id'],
	// 			$row['category_id'],
	// 			$row['title'],
	// 			$row['author'],
	// 			$row['date_up'],
	// 			$row['content'],
	// 			$row['feature']
	// 		);
	// 		array_push($SingerList, $Singer);
	// 	}
	// 	$result->free();
			
	// 	return $SingerList;
	// }

	public function insertSinger($Singer)
	{
		return $this->runQuery(
			"INSERT INTO Singer(id, name, image, detail) 
			VALUE (
				'{$Singer->getId()}',
				'{$Singer->getName()}',
				'{$Singer->getImage()}',
                '{$Singer->getDetail()}'
			)"
		);
	}

	public function updateSinger($Singer)
	{
		return $this->runQuery(
			"UPDATE Singer
			SET name = '{$Singer->getName()}',
                image = '{$Singer->getImage()}',
                detail = '{$Singer->getDetail()}'
			WHERE id = {$Singer->getId()}"
		);
	}

	// public function deleteSinger($ID)
	// {
    //     $this->runQuery("DELETE FROM Singer_Detail WHERE Singer_id = {$ID}");
	// 	$this->runQuery("DELETE FROM Singer WHERE id = {$ID}");
	// }
}

?>