<?php
require_once SITE_ROOT."/Config/DBCon.php";
require_once SITE_ROOT."/Entities/HistoryVote.php";

class HistoryVoteDao extends DBConnection
{
	public function __construct() 
	{
		parent::__construct();
	}

	public function getHistoryVoteBySongId($id)
	{
		$result = $this->runQuery("SELECT *	FROM History_Vote WHERE song_id = {$id}");
		$HistoryVoteList = array();
		while ($row = $result->fetch_assoc())
		{
			$HistoryVote = new HistoryVote(
				$row['username_id'],
				$row['song_id'],
				$row['stars']
			);
			array_push($HistoryVoteList, $HistoryVote);
		}
		$result->free();

		return $HistoryVoteList;
	}

	// public function getHistoryVoteByTitle($title)
	// {
	// 	$result = $this->runQuery("SELECT *	FROM post WHERE title = {$title}");

	// 	$row = $result->fetch_assoc();
	// 	return new HistoryVote(
	// 		$row['id'],
	// 		$row['category_id'],
	// 		$row['title'],
	// 		$row['author'],
	// 		$row['date_up'],
	// 		$row['content'],
	// 		$row['feature']
	// 	);
	// }
	
	public function getHistoryVoteByUsernameIdAndSongId($Username_id, $Song_id)
	{
        $result = $this->runQuery("SELECT *	FROM history_vote WHERE username_id = '{$Username_id}' AND song_id = {$Song_id}");
								  
		if (!$result) { echo $Username_id." ".$Song_id." ".var_dump($result);
			return $result;
		} 

		$row = $result->fetch_assoc();
		return new HistoryVote(
			$row['username_id'],
			$row['song_id'],
			$row['stars']
		);
	}

	// public function getHistoryVoteByCategory($CategoryID)
	// {
	// 	$result = $this->runQuery("SELECT *	FROM post WHERE category_id = {$CategoryID}");

	// 	$HistoryVoteList = array();
	// 	while ($row = $result->fetch_assoc())
	// 	{
	// 		$HistoryVote = new HistoryVote(
	// 			$row['id'],
	// 			$row['category_id'],
	// 			$row['title'],
	// 			$row['author'],
	// 			$row['date_up'],
	// 			$row['content'],
	// 			$row['feature']
	// 		);
	// 		array_push($HistoryVoteList, $HistoryVote);
	// 	}
	// 	$result->free();
			
	// 	return $HistoryVoteList;
	// }

	public function insertHistoryVote($HistoryVote)
	{
		return $this->runQuery(
			"INSERT INTO history_vote(username_id, song_id, stars) 
			VALUE (
				'{$HistoryVote->getUsername_id()}',
				'{$HistoryVote->getSong_id()}',
				'{$HistoryVote->getStars()}'
			)"
		);
	}

	// public function updateHistoryVote($HistoryVote)
	// {
	// 	return $this->runQuery(
	// 		"UPDATE History_Vote
	// 		SET name = '{$HistoryVote->getName()}'
	// 		WHERE id = {$HistoryVote->getId()}"
	// 	);
	// }

	public function deleteHistoryVote($ID)
	{
		$this->runQuery("DELETE FROM History_Vote WHERE song_id = {$ID}");
	}
}

?>