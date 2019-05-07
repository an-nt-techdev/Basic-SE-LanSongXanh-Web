<?php
require_once SITE_ROOT."/Config/DBCon.php";
require_once SITE_ROOT."/Entities/Account.php";

class AccountDao extends DBConnection
{
	public function __construct() 
	{
		parent::__construct();
	}

	// public function getAllAccount()
	// {
	// 	$result = $this->runQuery("SELECT *	FROM post");
	// 	$AccountList = array();
	// 	while ($row = $result->fetch_assoc())
	// 	{
	// 		$Account = new Account(
	// 			$row['id'],
	// 			$row['category_id'],
	// 			$row['title'],
	// 			$row['author'],
	// 			$row['date_up'],
	// 			$row['content'],
	// 			$row['feature']
	// 		);
	// 		array_push($AccountList, $Account);
	// 	}
	// 	$result->free();

	// 	return $AccountList;
	// }

	// public function getAccountByTitle($title)
	// {
	// 	$result = $this->runQuery("SELECT *	FROM post WHERE title = {$title}");

	// 	$row = $result->fetch_assoc();
	// 	return new Account(
	// 		$row['id'],
	// 		$row['category_id'],
	// 		$row['title'],
	// 		$row['author'],
	// 		$row['date_up'],
	// 		$row['content'],
	// 		$row['feature']
	// 	);
	// }
	
	public function getAccountByUsername($ID)
	{
		$result = $this->runQuery("SELECT *	FROM Account WHERE username = {$ID}");

		$row = $result->fetch_assoc();
		return new Account(
			$row['username'],
			$row['password'],
			$row['ranking']
		);
	}

	// public function getAccountByCategory($CategoryID)
	// {
	// 	$result = $this->runQuery("SELECT *	FROM post WHERE category_id = {$CategoryID}");

	// 	$AccountList = array();
	// 	while ($row = $result->fetch_assoc())
	// 	{
	// 		$Account = new Account(
	// 			$row['id'],
	// 			$row['category_id'],
	// 			$row['title'],
	// 			$row['author'],
	// 			$row['date_up'],
	// 			$row['content'],
	// 			$row['feature']
	// 		);
	// 		array_push($AccountList, $Account);
	// 	}
	// 	$result->free();
			
	// 	return $AccountList;
	// }

	public function insertAccount($Account)
	{
		return $this->runQuery(
			"INSERT INTO Account(username, password, ranking) 
			VALUE (
				'{$Account->getUsername()}',
				'{$Account->getPassword()}',
				'{$Account->getRanking()}'
			)"
		);
	}

	public function updateAccount($Account)
	{
		return $this->runQuery(
			"UPDATE Account
			SET password = '{$Account->getPassword()}',
				ranking = '{$Account->getRanking()}'
			WHERE username = {$Account->getUsername()}"
		);
	}

	// public function deleteAccount($ID)
	// {
	// 	$this->runQuery("DELETE FROM Account WHERE username_id = {$ID}");
	// }
}

?>