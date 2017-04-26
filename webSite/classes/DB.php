<?php

class DB{

	private $pdo, $sth;


	public function __construct(){
		try {
			$this->pdo = new PDO('mysql:host='. Config::get("mysql/host") .';dbname='. Config::get("mysql/dbName"), Config::get("mysql/username"), Config::get("mysql/password"));
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e) {
	    	echo $sql . "<br>" . $e->getMessage();
	    }


	}

	public function addUser($vards, $uzvards, $lietotajvards, $parole, $epasts) {
		$hashedPW = MD5($lietotajvards);
		$datums = date("Y-m-d H:i:s");
		$sql = "INSERT INTO lietotaji(vards, uzvards, lietotajvards, parole, epasts, pieregistrejas) VALUES (?,?,?,?,?,?)";
		$params = array($vards, $uzvards, $lietotajvards, $hashedPW, $epasts, $datums);
		$sth = $this->pdo->prepare($sql);
		$sth->execute($params);
	}

	public function getUserIDbyUsername($userName) {
		//print_r($userName);
		$sql = "SELECT id FROM lietotaji WHERE lietotajvards = ?";
		$sth = $this->pdo->prepare($sql);
		$sth->bindValue(1,$userName);
		$sth->execute();
		$result = $sth->fetch(PDO::FETCH_ASSOC);
		$result = $result['id'];
		return $result;
	}
	public function getUserAccess($userName) {
		//print_r($userName);
		$sql = "SELECT tiesibas FROM lietotaji WHERE lietotajvards = ?";
		$sth = $this->pdo->prepare($sql);
		$sth->bindValue(1,$userName);
		$sth->execute();
		$result = $sth->fetch(PDO::FETCH_ASSOC);
		$result = $result['id'];
		return $result;
	}

	public function getUserIDbyEmail($email) {
		$sql = "SELECT id FROM lietotaji WHERE epasts = ?";
		$sth = $this->pdo->prepare($sql);
		$sth->bindValue(1,$email);
		$sth->execute();
		$result = $sth->fetch(PDO::FETCH_ASSOC);
		$result = $result['id'];
		return $result;
	}

	public function usernameInUse($userName) {
		if($this->getUserIDbyUsername($userName)) {
			return true;
		}
		return false;
	}

	public function deleteUser($userID) {
		$sql = "DELETE FROM lietotaji WHERE id = ?";
		$sth = $this->pdo->prepare($sql);
		$sth->bindValue(1,$userID);
		$sth->execute();
	}

	public function emailInUse($email) {
		if($this->getUserIDbyEmail($email)) {
			return true;
		}
		return false;
	}

	/*public function editUser($userID, $params = array()) {
		if (count($params)) {

			$result = $this->updateUser();
		}
		return false;
	}*/

	/*private function updateUser() {
		return true;
	}*/
}