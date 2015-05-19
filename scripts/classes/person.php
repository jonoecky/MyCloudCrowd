<?php

/**
 * Create a new user and all the interactions to be performed on the user e.g. "Add friend" etc. 
 * are to be controlled via this class. links include address, adverts (1 person can have *many 
 * relationship with adverts)
 */
class Person {
	
	private $firstname;
	private $lastname;
	private $DOBDay;
	private $DOBMonth;
	private $DOBYear;
	private $email;
	private $myAdverts;
	private $watchingAdverts;
	private $completedAdverts;
	private $inProgressAdverts;
	private $password;
	private $username;
	private $feedback = 50;
	
	function __construct($firstname, $lastname, $DOBDay, $DOBMonth, $DOBYear, $email, $password, $username) {
		$this->firstname = $firstname;
		$this->lastname = $lastname;
		$this->DOBDay = $DOBDay;
		$this->DOBMonth = $DOBMonth;
		$this->DOBYear = $DOBYear;
		$this->email = $email;
		$this->password = $password;
		$this->username = $username;
	}
	
	public function getFirstname(){
		return $this->firstname;
	}
	
	public function setFirstname($newFirstname){
		$this->firstname = $newFirstname;
	}
	
	public function getLastname(){
		return $this->lastname;
	}
	
	public function setLastname($newLastname){
		$this->lastname = $newLastname;
	}
	
	public function getName(){
		return $this->firstname + " " + $this->lastname;
	}
	
	public function getDOBDay(){
		return $this->DOBDay;
	}
	
	
}


?>