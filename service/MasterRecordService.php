<?php

// require '../utility/Database.php';
require '../../model/SubdivisionManagerRecord.php';

class MasterRecordService {

	function fetchAllSubdivisionManagerRecords(){

		$dbObject = new Database();
		$dbConnection = $dbObject->getDatabaseConnection();

		$sql = "SELECT from users 
		inner join subdivisions on users.user_id = subdivisions.users_user_id 
		inner join roles on users.roles_role_id=roles.role_id
		where roles.role_name = 'subdivision manager'";

		$stmt = $dbConnection->prepare($sql);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'SubdivisionManagerRecord');

		if ($stmt->execute()){
			return $stmt->fetchAll();
		} else {
			return 'Failed';
		}
	}

}