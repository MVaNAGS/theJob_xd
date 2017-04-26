<?php
class Sessions{
	private $id, $username, $firsname, $lastname, $email, $accessLevel;
	private $SESSION_AGE = CONFIG::get("session/age");

	public function __construct($id, $username, $firstname, $lastname, $email, $access) {
		$this->id = $id;
		$this->username = $username;
		$this->firstname = $firstname;
		$this->lastname = $lastname;
		$this->email = $email;
		$this->accessLevel = $access;
	}

	public function setSession() {
		$_SESSION["id"] = $this->id;
		$_SESSION["username"] = $this->username;
		$_SESSION["name"] = $this->firstname;
		$_SESSION["lastname"] = $this->lastname;
		$_SESSION["email"] = $this->email;
		$_SESSION["admin"] = $this->accessLevel;
	}


}