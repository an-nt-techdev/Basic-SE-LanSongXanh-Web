<?php
require_once SITE_ROOT."/Config/DBCon.php";
require_once SITE_ROOT."/Entities/VoteSong.php";

class VoteSongDao extends DBConnection
{
	public function __construct() 
	{
		parent::__construct();
	}

	public function getAllVoteSong()
	{
		$result = $this->runQuery("SELECT *	FROM vote_song");
		$VoteSongList = array();
		while ($row = $result->fetch_assoc())
		{
			$VoteSong = new VoteSong(
				$row['song_id'],
				$row['stars'],
				$row['point']
			);
			array_push($VoteSongList, $VoteSong);
		}
		$result->free();

		return $VoteSongList;
	}

	// public function getVoteSongByTitle($title)
	// {
	// 	$result = $this->runQuery("SELECT *	FROM post WHERE title = {$title}");

	// 	$row = $result->fetch_assoc();
	// 	return new VoteSong(
	// 		$row['id'],
	// 		$row['category_id'],
	// 		$row['title'],
	// 		$row['author'],
	// 		$row['date_up'],
	// 		$row['content'],
	// 		$row['feature']
	// 	);
	// }
	
	public function getVoteSongBySongId($Song_id)
	{
        $result = $this->runQuery("SELECT *	FROM vote_song WHERE song_id = {$Song_id}");

		$row = $result->fetch_assoc();
		return new VoteSong(
			$row['song_id'],
			$row['stars'],
			$row['point']
		);
	}

	// public function getVoteSongByCategory($CategoryID)
	// {
	// 	$result = $this->runQuery("SELECT *	FROM post WHERE category_id = {$CategoryID}");

	// 	$VoteSongList = array();
	// 	while ($row = $result->fetch_assoc())
	// 	{
	// 		$VoteSong = new VoteSong(
	// 			$row['id'],
	// 			$row['category_id'],
	// 			$row['title'],
	// 			$row['author'],
	// 			$row['date_up'],
	// 			$row['content'],
	// 			$row['feature']
	// 		);
	// 		array_push($VoteSongList, $VoteSong);
	// 	}
	// 	$result->free();
			
	// 	return $VoteSongList;
	// }

	public function insertVoteSong($VoteSong)
	{
		return $this->runQuery(
			"INSERT INTO vote_song(song_id, stars, point) 
			VALUE (
				'{$VoteSong->getSong_id()}',
				'{$VoteSong->getStars()}',
				'{$VoteSong->getPoint()}'
			)"
		);
	}

	public function updateVoteSong($VoteSong)
	{
		return $this->runQuery(
			"UPDATE vote_song
			SET stars = '{$VoteSong->getStars()}',
                point = '{$VoteSong->getPoint()}'
			WHERE song_id = {$VoteSong->getSong_id()}"
		);
	}

	// public function deleteVoteSong($ID)
	// {
	// 	$this->runQuery("DELETE FROM Vote_Song WHERE song_id = {$ID}");
	// }
}

?>