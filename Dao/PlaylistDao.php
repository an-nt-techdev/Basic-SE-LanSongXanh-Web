<?php
require_once SITE_ROOT."/Config/DBCon.php";
require_once SITE_ROOT."/Entities/Playlist.php";

class PlaylistDao extends DBConnection
{
	public function __construct() 
	{
		parent::__construct();
	}

	// public function getAllPlaylist()
	// {
	// 	$result = $this->runQuery("SELECT *	FROM post");
	// 	$PlaylistList = array();
	// 	while ($row = $result->fetch_assoc())
	// 	{
	// 		$Playlist = new Playlist(
	// 			$row['id'],
	// 			$row['category_id'],
	// 			$row['title'],
	// 			$row['author'],
	// 			$row['date_up'],
	// 			$row['content'],
	// 			$row['feature']
	// 		);
	// 		array_push($PlaylistList, $Playlist);
	// 	}
	// 	$result->free();

	// 	return $PlaylistList;
	// }

	// public function getPlaylistByTitle($title)
	// {
	// 	$result = $this->runQuery("SELECT *	FROM post WHERE title = {$title}");

	// 	$row = $result->fetch_assoc();
	// 	return new Playlist(
	// 		$row['id'],
	// 		$row['category_id'],
	// 		$row['title'],
	// 		$row['author'],
	// 		$row['date_up'],
	// 		$row['content'],
	// 		$row['feature']
	// 	);
	// }
	
	public function getPlaylistByUsernameId($ID)
	{
		$result = $this->runQuery("SELECT *	FROM Playlist WHERE username_id = {$ID}");

		$PlaylistList = array();
		while ($row = $result->fetch_assoc())
		{
			$Playlist = new Playlist(
				$row['id'],
				$row['name']
			);
			array_push($PlaylistList, $Playlist);
		}
		$result->free();

		return $PlaylistList;
	}

	// public function getPlaylistByCategory($CategoryID)
	// {
	// 	$result = $this->runQuery("SELECT *	FROM post WHERE category_id = {$CategoryID}");

	// 	$PlaylistList = array();
	// 	while ($row = $result->fetch_assoc())
	// 	{
	// 		$Playlist = new Playlist(
	// 			$row['id'],
	// 			$row['category_id'],
	// 			$row['title'],
	// 			$row['author'],
	// 			$row['date_up'],
	// 			$row['content'],
	// 			$row['feature']
	// 		);
	// 		array_push($PlaylistList, $Playlist);
	// 	}
	// 	$result->free();
			
	// 	return $PlaylistList;
	// }

	public function insertPlaylist($Playlist)
	{
		return $this->runQuery(
			"INSERT INTO Playlist(id, name, username_id) 
			VALUE (
				'{$Playlist->getId()}',
				'{$Playlist->getName()}',
				'{$Playlist->getUsername_id()}'
			)"
		);
	}

	public function updatePlaylist($Playlist)
	{
		return $this->runQuery(
			"UPDATE Playlist
			SET name = '{$Playlist->getName()}'
			WHERE id = {$Playlist->getId()}"
		);
	}

	public function deletePlaylist($ID)
	{
        $this->runQuery("DELETE FROM Playlist_Detail WHERE playlist_id = {$ID}");
		$this->runQuery("DELETE FROM Playlist WHERE id = {$ID}");
	}
}

?>