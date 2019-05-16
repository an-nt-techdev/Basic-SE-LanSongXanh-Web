<?php
require_once SITE_ROOT."/Config/DBCon.php";
require_once SITE_ROOT."/Entities/PlaylistDetail.php";

class PlaylistDetailDao extends DBConnection
{
	public function __construct() 
	{
		parent::__construct();
	}

	// public function getAllPlaylistDetail()
	// {
	// 	$result = $this->runQuery("SELECT *	FROM Playlist_Detail");
	// 	$PlaylistDetailList = array();
	// 	while ($row = $result->fetch_assoc())
	// 	{
	// 		$PlaylistDetail = new PlaylistDetail(
	// 			$row['playlist_id'],
	// 			$row['song_id']
	// 		);
	// 		array_push($PlaylistDetailList, $PlaylistDetail);
	// 	}
	// 	$result->free();

	// 	return $PlaylistDetailList;
	// }

	// public function getPlaylistDetailByTitle($title)
	// {
	// 	$result = $this->runQuery("SELECT *	FROM post WHERE title = {$title}");

	// 	$row = $result->fetch_assoc();
	// 	return new PlaylistDetail(
	// 		$row['id'],
	// 		$row['category_id'],
	// 		$row['title'],
	// 		$row['author'],
	// 		$row['date_up'],
	// 		$row['content'],
	// 		$row['feature']
	// 	);
	// }
	
	public function getPlaylistDetailByPlaylistId($ID)
	{
		$result = $this->runQuery("SELECT *	FROM Playlist_Detail WHERE playlist_id = {$ID}");

		$PlaylistDetailList = array();
		while ($row = $result->fetch_assoc())
		{
			$PlaylistDetail = new PlaylistDetail(
				$row['playlist_id'],
				$row['song_id']
			);
			array_push($PlaylistDetailList, $PlaylistDetail);
		}
		$result->free();

		return $PlaylistDetailList;
	}

	// public function getPlaylistDetailByCategory($CategoryID)
	// {
	// 	$result = $this->runQuery("SELECT *	FROM post WHERE category_id = {$CategoryID}");

	// 	$PlaylistDetailList = array();
	// 	while ($row = $result->fetch_assoc())
	// 	{
	// 		$PlaylistDetail = new PlaylistDetail(
	// 			$row['id'],
	// 			$row['category_id'],
	// 			$row['title'],
	// 			$row['author'],
	// 			$row['date_up'],
	// 			$row['content'],
	// 			$row['feature']
	// 		);
	// 		array_push($PlaylistDetailList, $PlaylistDetail);
	// 	}
	// 	$result->free();
			
	// 	return $PlaylistDetailList;
	// }

	public function insertPlaylistDetail($PlaylistDetail)
	{
		return $this->runQuery(
			"INSERT INTO Playlist_Detail(playlist_id, song_id) 
			VALUE (
				'{$PlaylistDetail->getPlaylist_id()}',
				'{$PlaylistDetail->getSong_id()}'
			)"
		);
	}

	// public function updatePlaylistDetail($PlaylistDetail)
	// {
	// 	return $this->runQuery(
	// 		"UPDATE PlaylistDetail
	// 		SET song_id = '{$PlaylistDetail->getSong_id()}'
	// 		WHERE playlist_id = {$PlaylistDetail->getPlaylist_id()}"
	// 	);
	// }

	public function deletePlaylistDetail($ID)
	{
		$this->runQuery("DELETE FROM PlaylistDetail WHERE playlist_id = {$ID}");
	}
}

?>