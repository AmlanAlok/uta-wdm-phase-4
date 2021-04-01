<?php

require '../utility/Database.php';
require '../entity/Subdivision.php';
require '../entity/Role.php';
require '../entity/User.php';

class SignUpService {

	function storeSignUpInfo(){

		$firstName = $_POST['first-name'];
		$lastName = $_POST['last-name'];
		$emailId = $_POST['email'];
		$password = $_POST['password'];
		$areaCode = $_POST['zip'];
		$phoneNumber = $_POST['phone-number'];
		$joiningDatetime = date("Y-m-d h:i:s", mktime());
		$rolesRoleId = $_POST['role'];

		$user = new User(NULL, $firstName, $lastName, $emailId, $password, $areaCode, $phoneNumber, $joiningDatetime, $rolesRoleId);
		var_dump($user);

		



	}

	// function storeInfoInUser($firstName, $lastName, $emailId, $password, $areaCode, $phoneNumber, $joiningDatetime){


	// }

	function fetchAllRoles(){
		
		$dbObject = new Database();
		$dbConnection = $dbObject->getDatabaseConnection();

		$sql = "SELECT * from roles where not role_name = 'admin'";

		$stmt = $dbConnection->prepare($sql);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'Role');


		if ($stmt->execute()){
			return $stmt->fetchAll();
		} else{
			return 'Failed';
		}

	}

	function fetchAllSubdivisions(){
		
		$dbObject = new Database();
		$dbConnection = $dbObject->getDatabaseConnection();

		$sql = "SELECT * from subdivisions";

		$stmt = $dbConnection->prepare($sql);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'Subdivision');


		if ($stmt->execute()){
			return $stmt->fetchAll();
		} else{
			return 'Failed';
		}

	}
}