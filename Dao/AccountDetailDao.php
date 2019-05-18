<?php
require_once SITE_ROOT."/Config/DBCon.php";
require_once SITE_ROOT."/Entities/AccountDetail.php";

class AccountDetailDao extends DBConnection
{
	public function __construct() 
	{
		parent::__construct();
	}

	// public function getAllAccountDetail()
	// {
	// 	$result = $this->runQuery("SELECT *	FROM post");
	// 	$AccountDetailList = array();
	// 	while ($row = $result->fetch_assoc())
	// 	{
	// 		$AccountDetail = new AccountDetail(
	// 			$row['id'],
	// 			$row['category_id'],
	// 			$row['title'],
	// 			$row['author'],
	// 			$row['date_up'],
	// 			$row['content'],
	// 			$row['feature']
	// 		);
	// 		array_push($AccountDetailList, $AccountDetail);
	// 	}
	// 	$result->free();

	// 	return $AccountDetailList;
	// }

	// public function getAccountDetailByTitle($title)
	// {
	// 	$result = $this->runQuery("SELECT *	FROM post WHERE title = {$title}");

	// 	$row = $result->fetch_assoc();
	// 	return new AccountDetail(
	// 		$row['id'],
	// 		$row['category_id'],
	// 		$row['title'],
	// 		$row['author'],
	// 		$row['date_up'],
	// 		$row['content'],
	// 		$row['feature']
	// 	);
	// }
	
	public function getAccountDetailByUsernameId($ID)
	{
		$result = $this->runQuery("SELECT *	FROM account_detail WHERE username_id = {$ID}");

		$row = $result->fetch_assoc();
		return new AccountDetail(
			$row['username_id'],
			$row['name'],
			$row['birthday'],
			$row['sex'],
			$row['email']
		);
	}

	// public function getAccountDetailByCategory($CategoryID)
	// {
	// 	$result = $this->runQuery("SELECT *	FROM post WHERE category_id = {$CategoryID}");

	// 	$AccountDetailList = array();
	// 	while ($row = $result->fetch_assoc())
	// 	{
	// 		$AccountDetail = new AccountDetail(
	// 			$row['id'],
	// 			$row['category_id'],
	// 			$row['title'],
	// 			$row['author'],
	// 			$row['date_up'],
	// 			$row['content'],
	// 			$row['feature']
	// 		);
	// 		array_push($AccountDetailList, $AccountDetail);
	// 	}
	// 	$result->free();
			
	// 	return $AccountDetailList;
	// }

	public function insertAccountDetail($AccountDetail)
	{
		return $this->runQuery(
			"INSERT INTO account_detail(username_id, name, birthday, sex, email) 
			VALUE (
				'{$AccountDetail->getUsername_id()}',
				'{$AccountDetail->getName()}',
				'{$AccountDetail->getBirthday()}',
				'{$AccountDetail->getSex()}',
				'{$AccountDetail->getEmail()}'
			)"
		);
	}

	public function updateAccountDetail($AccountDetail)
	{
		return $this->runQuery(
			"UPDATE account_detail
			SET name = '{$AccountDetail->getName()}',
				birthday = '{$AccountDetail->getBirthday()}',
				sex = '{$AccountDetail->getSex()}',
				email = '{$AccountDetail->getEmail()}'
			WHERE username_id = {$AccountDetail->getUsername_id()}"
		);
	}

	// public function deleteAccountDetail($ID)
	// {
	// 	$this->runQuery("DELETE FROM AccountDetail WHERE username_id = {$ID}");
	// }
}

?>