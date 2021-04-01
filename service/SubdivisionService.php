<?php

require '../../utility/Database.php';
require '../../entity/Subdivision.php';

class SubdivisionService {

	function addNewSubdivision($newSubdivisionName, $userId){

		if(empty($newSubdivisionName) || empty($userId)){
			echo "Either subdivision name or userId is empty";
		} else {
			$dbObject = new Database();
		    $dbConnection = $dbObject->getDatabaseConnection();

		    $sql_query_to_add_new_subdivision = "INSERT into `subdivisions` (`subdivision_id`,`subdivision_name`,`users_user_id`) values (NULL, :newSubdivisionName, :userId)";

		    $stmt = $dbConnection->prepare($sql_query_to_add_new_subdivision);
			$stmt->bindValue(':newSubdivisionName', $newSubdivisionName, PDO::PARAM_STR);
			$stmt->bindValue(':userId', $userId, PDO::PARAM_INT);

			if ($stmt->execute()){
				return 'New Subdivision Added Successfully';
			} else{
				return 'Failed';
			}

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