<?php

require '../utility/Database.php';
require '../entity/Subdivision.php';
require '../entity/Role.php';
require '../entity/User.php';
require '../entity/Address.php';
require '../entity/ResponsibleContact.php';
require '../entity/Building.php';
require '../entity/Apartment.php';

class SignUpService {

	function storeSignUpInfo(){

		$signUpService = new SignUpService();
		$rolesList = $signUpService->fetchAllRoles();
		// var_dump($rolesList);

		$firstName = $_POST['first-name'];
		$lastName = $_POST['last-name'];
		$emailId = $_POST['email'];
		$password = $_POST['password'];
		$areaCode = $_POST['zip'];
		$phoneNumber = $_POST['phone-number'];
		$joiningDatetime = date("Y-m-d h:i:s", mktime());
		$role_id = '';

		foreach ($rolesList as $role){
			if ($role->role_name == $_POST['role']) {
				$role_id = $role->role_id;
			}
		}

		$rolesRoleId = $role_id;

		$userId = $signUpService->storeUserInformation($firstName, $lastName, $emailId, $password, $areaCode, $phoneNumber, $joiningDatetime, $rolesRoleId);
		echo "USER-ID";
		var_dump($userId);

		$streetAddress = $_POST['address1'];
		$streetAddressLine2 = $_POST['address2']; 
		$city = $_POST['city']; 
		$state = $_POST['state']; 
		$zipCode = $_POST['zip'];
		$country = $_POST['country']; 
		$usersUserId = $userId;

		// $address = new Address(NULL, $street_address, $street_address_line_2, $city, $state, $zip_code, $country, $users_user_id);
		// var_dump($address);
		$userAddressStoredStatus = $signUpService->storeUserAddressInformation($streetAddress, $streetAddressLine2, $city, $state, $zipCode, $country, $usersUserId);

		// $responsible_contact_id = $_POST[''];
		$name = $_POST['rname']; 
		$address = $_POST['raddress']; 
		$city = $_POST['rcity']; 
		$zipCode = $_POST['rzip']; 
		$country = $_POST['rcountry'];
		$phoneNumber = $_POST['rphno']; 
		$usersUserId = $userId;

		// $responsibleContact = new ResponsibleContact(NULL, $name, $address, $city, $zip_code, $country, $phone_number, $users_user_id);
		// var_dump($responsibleContact);
		$responsibleContactStoredStatus = $signUpService->storeResponsibleContactInformation($name, $address, $city, $zipCode, $country, $phoneNumber, $usersUserId);



	}

	function storeResponsibleContactInformation($name, $address, $city, $zipCode, $country, $phoneNumber, $usersUserId){

		$dbObject = new Database();
		$dbConnection = $dbObject->getDatabaseConnection();

		$sql = "INSERT into `responsible_contacts` (`responsible_contact_id`,`name`, `address`, `city`, `zip_code`, `country`, `phone_number`, `users_user_id`) values (NULL, :name, :address, :city, :zipCode, :country, :phoneNumber, :usersUserId)";

		$stmt = $dbConnection->prepare($sql);

		$stmt->bindValue(':name', $name, PDO::PARAM_STR);
		$stmt->bindValue(':address', $address, PDO::PARAM_STR);
		$stmt->bindValue(':city', $city, PDO::PARAM_STR);
		$stmt->bindValue(':zipCode', $zipCode, PDO::PARAM_STR);
		$stmt->bindValue(':country', $country, PDO::PARAM_STR);
		$stmt->bindValue(':phoneNumber', $phoneNumber, PDO::PARAM_STR);
		$stmt->bindValue(':usersUserId', $usersUserId, PDO::PARAM_INT);

		if ($stmt->execute()){
			return 'Success';
		} else{
			return 'Failed';
		}
	}

	function storeUserInformation($firstName, $lastName, $emailId, $password, $areaCode, $phoneNumber, $joiningDatetime, $rolesRoleId){

		$dbObject = new Database();
		$dbConnection = $dbObject->getDatabaseConnection();

		$sql = "INSERT into `users` (`user_id`,`first_name`, `last_name`, `email_id`, `password`, `area_code`, `phone_number`, `joining_datetime`, `roles_role_id`) values (NULL, :firstName, :lastName, :emailId, :password, :areaCode, :phoneNumber, :joiningDatetime, :rolesRoleId)";

		$stmt = $dbConnection->prepare($sql);

		$stmt->bindValue(':firstName', $firstName, PDO::PARAM_STR);
		$stmt->bindValue(':lastName', $lastName, PDO::PARAM_STR);
		$stmt->bindValue(':emailId', $emailId, PDO::PARAM_STR);
		$stmt->bindValue(':password', $password, PDO::PARAM_STR);
		$stmt->bindValue(':areaCode', $areaCode, PDO::PARAM_STR);
		$stmt->bindValue(':phoneNumber', $phoneNumber, PDO::PARAM_STR);
		$stmt->bindValue(':joiningDatetime', $joiningDatetime, PDO::PARAM_STR);
		$stmt->bindValue(':rolesRoleId', $rolesRoleId, PDO::PARAM_INT);

		if ($stmt->execute()){
			$newUserId = $dbConnection->lastInsertId();
			return $newUserId;
		} else{
			return 'Failed';
		}

	}

	function storeUserAddressInformation($streetAddress, $streetAddressLine2, $city, $state, $zipCode, $country, $usersUserId){

		$dbObject = new Database();
		$dbConnection = $dbObject->getDatabaseConnection();

		$sql = "INSERT into `addresses` (`address_id`,`street_address`, `street_address_line_2`, `city`, `state`, `zip_code`, `country`, `users_user_id`) values (NULL, :streetAddress, :streetAddressLine2, :city, :state, :zipCode, :country, :usersUserId)";

		$stmt = $dbConnection->prepare($sql);

		$stmt->bindValue(':streetAddress', $streetAddress, PDO::PARAM_STR);
		$stmt->bindValue(':streetAddressLine2', $streetAddressLine2, PDO::PARAM_STR);
		$stmt->bindValue(':city', $city, PDO::PARAM_STR);
		$stmt->bindValue(':state', $state, PDO::PARAM_STR);
		$stmt->bindValue(':zipCode', $zipCode, PDO::PARAM_STR);
		$stmt->bindValue(':country', $country, PDO::PARAM_STR);
		$stmt->bindValue(':usersUserId', $usersUserId, PDO::PARAM_INT);

		if ($stmt->execute()){
			return 'Success';
		} else{
			return 'Failed';
		}

	}

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

	function fetchAllApartments(){
		
		$dbObject = new Database();
		$dbConnection = $dbObject->getDatabaseConnection();

		$sql = "SELECT * from apartments";

		$stmt = $dbConnection->prepare($sql);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'Apartment');


		if ($stmt->execute()){
			return $stmt->fetchAll();
		} else{
			return 'Failed';
		}

	}

	function fetchAllBuildings(){
		
		$dbObject = new Database();
		$dbConnection = $dbObject->getDatabaseConnection();

		$sql = "SELECT * from buildings";

		$stmt = $dbConnection->prepare($sql);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'Building');


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