<?php
require_once SITE_ROOT."/Config/DBCon.php";
require_once SITE_ROOT."/Entities/Composer.php";

class ComposerDao extends DBConnection
{
	public function __construct() 
	{
		parent::__construct();
	}

	// public function getAllComposer()
	// {
	// 	$result = $this->runQuery("SELECT *	FROM post");
	// 	$ComposerList = array();
	// 	while ($row = $result->fetch_assoc())
	// 	{
	// 		$Composer = new Composer(
	// 			$row['id'],
	// 			$row['category_id'],
	// 			$row['title'],
	// 			$row['author'],
	// 			$row['date_up'],
	// 			$row['content'],
	// 			$row['feature']
	// 		);
	// 		array_push($ComposerList, $Composer);
	// 	}
	// 	$result->free();

	// 	return $ComposerList;
	// }

	// public function getComposerByTitle($title)
	// {
	// 	$result = $this->runQuery("SELECT *	FROM post WHERE title = {$title}");

	// 	$row = $result->fetch_assoc();
	// 	return new Composer(
	// 		$row['id'],
	// 		$row['category_id'],
	// 		$row['title'],
	// 		$row['author'],
	// 		$row['date_up'],
	// 		$row['content'],
	// 		$row['feature']
	// 	);
	// }
	
	public function getComposerByName($Name)
	{
		$result = $this->runQuery("SELECT *	FROM Composer WHERE name = {$Name}");

		$row = $result->fetch_assoc();
		return new Composer(
			$row['id'],
            $row['name'],
            $row['image'],
            $row['detail']
		);
	}

	// public function getComposerByCategory($CategoryID)
	// {
	// 	$result = $this->runQuery("SELECT *	FROM post WHERE category_id = {$CategoryID}");

	// 	$ComposerList = array();
	// 	while ($row = $result->fetch_assoc())
	// 	{
	// 		$Composer = new Composer(
	// 			$row['id'],
	// 			$row['category_id'],
	// 			$row['title'],
	// 			$row['author'],
	// 			$row['date_up'],
	// 			$row['content'],
	// 			$row['feature']
	// 		);
	// 		array_push($ComposerList, $Composer);
	// 	}
	// 	$result->free();
			
	// 	return $ComposerList;
	// }

	public function insertComposer($Composer)
	{
		return $this->runQuery(
			"INSERT INTO Composer(id, name, image, detail) 
			VALUE (
				'{$Composer->getId()}',
				'{$Composer->getName()}',
				'{$Composer->getImage()}',
                '{$Composer->getDetail()}'
			)"
		);
	}

	public function updateComposer($Composer)
	{
		return $this->runQuery(
			"UPDATE Composer
			SET name = '{$Composer->getName()}',
                image = '{$Composer->getImage()}',
                detail = '{$Composer->getDetail()}'
			WHERE id = {$Composer->getId()}"
		);
	}

	// public function deleteComposer($ID)
	// {
    //     $this->runQuery("DELETE FROM Composer_Detail WHERE Composer_id = {$ID}");
	// 	$this->runQuery("DELETE FROM Composer WHERE id = {$ID}");
	// }
}

?>