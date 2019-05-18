<?php
require_once SITE_ROOT."/Config/DBCon.php";
require_once SITE_ROOT."/Entities/TopMonth.php";

class TopMonthDao extends DBConnection
{
	public function __construct() 
	{
		parent::__construct();
	}

	public function getAllTopMonth()
	{
		$result = $this->runQuery("SELECT *	FROM top_week");
		$TopMonthList = array();
		while ($row = $result->fetch_assoc())
		{
			$TopMonth = new TopMonth(
				$row['top'],
				$row['song_id']
			);
			array_push($TopMonthList, $TopMonth);
		}
		$result->free();

		return $TopMonthList;
	}

	// public function getTopMonthByTitle($title)
	// {
	// 	$result = $this->runQuery("SELECT *	FROM post WHERE title = {$title}");

	// 	$row = $result->fetch_assoc();
	// 	return new TopMonth(
	// 		$row['id'],
	// 		$row['category_id'],
	// 		$row['title'],
	// 		$row['author'],
	// 		$row['date_up'],
	// 		$row['content'],
	// 		$row['feature']
	// 	);
	// }
	
	// public function getTopMonthByUsername($ID)
	// {
	// 	$result = $this->runQuery("SELECT *	FROM TopMonth WHERE username = {$ID}");

	// 	$row = $result->fetch_assoc();
	// 	return new TopMonth(
	// 		$row['username'],
	// 		$row['password'],
	// 		$row['ranking']
	// 	);
	// }

	// public function getTopMonthByCategory($CategoryID)
	// {
	// 	$result = $this->runQuery("SELECT *	FROM post WHERE category_id = {$CategoryID}");

	// 	$TopMonthList = array();
	// 	while ($row = $result->fetch_assoc())
	// 	{
	// 		$TopMonth = new TopMonth(
	// 			$row['id'],
	// 			$row['category_id'],
	// 			$row['title'],
	// 			$row['author'],
	// 			$row['date_up'],
	// 			$row['content'],
	// 			$row['feature']
	// 		);
	// 		array_push($TopMonthList, $TopMonth);
	// 	}
	// 	$result->free();
			
	// 	return $TopMonthList;
	// }

	public function insertTopMonth($TopMonth)
	{
		return $this->runQuery(
			"INSERT INTO TopMonth(top, song_id) 
			VALUE (
				'{$TopMonth->getTop()}',
				'{$TopMonth->getSong_id()}'
			)"
		);
	}

	public function updateTopMonth($TopMonth)
	{
		return $this->runQuery(
			"UPDATE TopMonth
			SET song_id = '{$TopMonth->getSong_id()}'
			WHERE top = {$TopMonth->getTop()}"
		);
	}

	public function deleteTopMonth($Top)
	{
		$this->runQuery("DELETE FROM TopMonth WHERE top = {$Top}");
	}
}

?>