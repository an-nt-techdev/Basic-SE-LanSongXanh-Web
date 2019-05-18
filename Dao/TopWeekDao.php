<?php
require_once SITE_ROOT."/Config/DBCon.php";
require_once SITE_ROOT."/Entities/TopWeek.php";

class TopWeekDao extends DBConnection
{
	public function __construct() 
	{
		parent::__construct();
	}

	public function getAllTopWeek()
	{
		$result = $this->runQuery("SELECT *	FROM top_week");
		$TopWeekList = array();
		while ($row = $result->fetch_assoc())
		{
			$TopWeek = new TopWeek(
				$row['top'],
				$row['song_id']
			);
			array_push($TopWeekList, $TopWeek);
		}
		$result->free();

		return $TopWeekList;
	}

	// public function getTopWeekByTitle($title)
	// {
	// 	$result = $this->runQuery("SELECT *	FROM post WHERE title = {$title}");

	// 	$row = $result->fetch_assoc();
	// 	return new TopWeek(
	// 		$row['id'],
	// 		$row['category_id'],
	// 		$row['title'],
	// 		$row['author'],
	// 		$row['date_up'],
	// 		$row['content'],
	// 		$row['feature']
	// 	);
	// }
	
	// public function getTopWeekByUsername($ID)
	// {
	// 	$result = $this->runQuery("SELECT *	FROM TopWeek WHERE username = {$ID}");

	// 	$row = $result->fetch_assoc();
	// 	return new TopWeek(
	// 		$row['username'],
	// 		$row['password'],
	// 		$row['ranking']
	// 	);
	// }

	// public function getTopWeekByCategory($CategoryID)
	// {
	// 	$result = $this->runQuery("SELECT *	FROM post WHERE category_id = {$CategoryID}");

	// 	$TopWeekList = array();
	// 	while ($row = $result->fetch_assoc())
	// 	{
	// 		$TopWeek = new TopWeek(
	// 			$row['id'],
	// 			$row['category_id'],
	// 			$row['title'],
	// 			$row['author'],
	// 			$row['date_up'],
	// 			$row['content'],
	// 			$row['feature']
	// 		);
	// 		array_push($TopWeekList, $TopWeek);
	// 	}
	// 	$result->free();
			
	// 	return $TopWeekList;
	// }

	// public function insertTopWeek($TopWeek)
	// {
	// 	return $this->runQuery(
	// 		"INSERT INTO TopWeek(top, song_id) 
	// 		VALUE (
	// 			'{$TopWeek->getTop()}',
	// 			'{$TopWeek->getSong_id()}'
	// 		)"
	// 	);
	// }

	public function updateTopWeek($TopWeek)
	{
		return $this->runQuery(
			"UPDATE top_week
			SET song_id = '{$TopWeek->getSong_id()}'
			WHERE top = {$TopWeek->getTop()}"
		);
	}

	public function deleteTopWeek($Top)
	{
		$this->runQuery("DELETE FROM TopWeek WHERE top = {$Top}");
	}
}

?>