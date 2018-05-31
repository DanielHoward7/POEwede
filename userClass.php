<!-- 
	Name: Daniel
	Surname: Howard
	Student Number: 16000911
	Declaration:
	This is my own code and any code from other sources will be referenced.
-->

<?php  
	
	class UserClass {

		private $users = [];
		private $userID;
		private $userEmail;
		private $userName;
		private $isAdmin;
		private $password;

	
	public function getUser(){
		return $this->users;
	}

	public function addUser($user){
		$this->users[] = $user;
	}

	public function getUserID($ID){

		$this->userID = $ID;

	}

	public function setUserID($ID){
		$this->userID = $ID;
	}

	public function setUserEmail($email){
		$this->userEmail = $email;
	}

	public function getUserEmail($email){
		$this->userEmail = $email;
	}

	public function setUserName($name){
		$this->userName = $name;
	}

	public function getUserName($name){
		$this->userName = $name;
	}

	public function isAdmin(){

		return $this->isAdmin; 
	}

	public function setPassword($pass){
		$this->password = $pass;
	}

}


?>