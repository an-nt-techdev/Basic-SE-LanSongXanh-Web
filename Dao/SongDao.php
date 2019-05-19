<?php
require_once SITE_ROOT."/Config/DBCon.php";
require_once SITE_ROOT."/Entities/Song.php";

class SongDao extends DBConnection
{
	public function __construct() 
	{
		parent::__construct();
	}

	public function getAllSong()
	{
		$result = $this->runQuery("SELECT *	FROM song");
		$SongList = array();
		while ($row = $result->fetch_assoc())
		{
			$Song = new Song(
				$row['id'],
				$row['namesong'],
				$row['composer_id'],
				$row['singer_id'],
				$row['link']
			);
			array_push($SongList, $Song);
		}
		$result->free();
		
		return $SongList;
	}

	public function getSongById($Id)
	{
		$result = $this->runQuery("SELECT *	FROM song WHERE id = {$Id}");

		$row = $result->fetch_assoc();
		return new Song(
			$row['id'],
			$row['namesong'],
			$row['composer_id'],
			$row['singer_id'],
			$row['link']
		);
	}

	public function getSongByNameSong($NameSong)
	{
		$result = $this->runQuery("SELECT *	FROM song WHERE namesong = {$NameSong}");

		$row = $result->fetch_assoc();
		return new Song(
			$row['id'],
			$row['namesong'],
			$row['composer_id'],
			$row['singer_id'],
			$row['link']
		);
	}
	
	public function getSongByComposerId($ID)
	{
		$result = $this->runQuery("SELECT *	FROM song WHERE composer_id = {$ID}");

		$SongList = array();
		while ($row = $result->fetch_assoc())
		{
			$Song = new Song(
				$row['id'],
			    $row['namesong'],
			    $row['composer_id'],
			    $row['singer_id'],
			    $row['link']
			);
			array_push($SongList, $Song);
		}
		$result->free();

		return $SongList;
	}

	public function getSongBySingerId($ID)
	{
		$result = $this->runQuery("SELECT *	FROM song WHERE singer_id = {$ID}");

		$SongList = array();
		while ($row = $result->fetch_assoc())
		{
			$Song = new Song(
				$row['id'],
			    $row['namesong'],
			    $row['composer_id'],
			    $row['singer_id'],
			    $row['link']
			);
			array_push($SongList, $Song);
		}
		$result->free();

		return $SongList;
	}

	public function insertSong($Song)
	{
		return $this->runQuery(
			"INSERT INTO song(id, namesong, composer_id, singer_id, link) 
			VALUE (
				'{$Song->getId()}',
				'{$Song->getNameSong()}',
				'{$Song->getComposer_id()}',
                '{$Song->getSinger_id()}',
                '{$Song->getLink()}'
			)"
		);
	}

	public function updateSong($Song)
	{
		return $this->runQuery(
			"UPDATE song
			SET namesong = '{$Song->getNameSong()}',
                composer_id = '{$Song->getComposer_id()}',
                singer_id = '{$Song->getSinger_id()}',
                link = '{$Song->getLink()}'
			WHERE id = {$Song->getId()}"
		);
	}

	public function deleteSong($ID)
	{
        $this->runQuery("DELETE FROM playlist_detail WHERE song_id = {$ID}");
        $this->runQuery("DELETE FROM history_vote WHERE song_id = {$ID}");
        $this->runQuery("DELETE FROM vote_song WHERE song_id = {$ID}");
		$this->runQuery("DELETE FROM song WHERE id = {$ID}");
	}
}

?>