<?php

require '../../entity/Apartment.php';

class BuildingService {

	function addNewBuilding($userId) {

		$newBuildingName = $_POST['new-building-name'];
	    $buildingsSubdivisionId = $_POST['subdivision-name'];
		$buildingId = '';
	    $buildingOccupancyStatus = 'empty';
	    $apartmentOccupancyStatus = 'empty';
	    $newBuildingService = new BuildingService();

	    $output = $newBuildingService->storeNewBuildingName($newBuildingName, $buildingOccupancyStatus, $buildingsSubdivisionId, $userId);

	    if ($output != 'Failed'){
	    	$buildingId = $output;
	    }
	    else {
	    	echo "Building Id not returned";
	    	exit;
	    }

	    $apartmentArray = [];
	    $apartmentIndex = "";

	    for ($i=1; $i<=4;$i=$i+1) {
	    	for ($j=1; $j<=4;$j=$j+1) {
	    		
	    		$apartmentIndex = "apt-num-f$i-a$j";
	    		// echo "^^apt-num-f$i-a$j~$_POST[$apartmentIndex]";
	    		// $apartment = new Apartment($_POST[$apartmentIndex], $apartmentOccupancyStatus, $buildingId, $buildingsSubdivisionId, $userId);
	    		$apartment = new Apartment();
	    		$apartment->apartment_number = $_POST[$apartmentIndex];
	    		$apartment->occupancy_status = $apartmentOccupancyStatus;
	    		$apartment->buildings_building_id = $buildingId;
	    		$apartment->subdivisions_subdivision_id	= $buildingsSubdivisionId;
	    		$apartment->users_user_id = $userId;

	    		array_push($apartmentArray, $apartment);
	    	}
	    }

	    // var_dump($apartmentArray);
	    return $newBuildingService->storeNewApartments($apartmentArray);

	}


	function storeNewBuildingName($newBuildingName, $buildingOccupancyStatus, $buildingsSubdivisionId, $userId){

		$dbObject = new Database();
		$dbConnection = $dbObject->getDatabaseConnection();

		$sql = "INSERT into `buildings` (`building_id`,`building_name`, `occupancy_status`, `subdivisions_subdivision_id`, `users_user_id`) values (NULL, :newBuildingName, :buildingOccupancyStatus, :buildingsSubdivisionId, :usersUserId)";

		$stmt = $dbConnection->prepare($sql);

		$stmt->bindValue(':newBuildingName', $newBuildingName, PDO::PARAM_STR);
		$stmt->bindValue(':buildingOccupancyStatus', $buildingOccupancyStatus, PDO::PARAM_STR);
		$stmt->bindValue(':buildingsSubdivisionId', $buildingsSubdivisionId, PDO::PARAM_INT);
		$stmt->bindValue(':usersUserId', $userId, PDO::PARAM_INT);

		if ($stmt->execute()){
			$newBuildingId = $dbConnection->lastInsertId();
			return $newBuildingId;
		} else{
			return 'Failed';
		}
	}
	

	function storeNewApartments($apartmentArray){

		$savingStatus = '';

		$dbObject = new Database();
		$dbConnection = $dbObject->getDatabaseConnection();

		foreach ($apartmentArray as $apartment) {

			$sql = "INSERT into `apartments` (`apartment_id`,`apartment_number`, `occupancy_status`, `buildings_building_id`, `subdivisions_subdivision_id`, `users_user_id`) values (NULL, :apartmentNumber, :apartmentOccupancyStatus, :buildingsBuildingId, :buildingsSubdivisionId, :usersUserId)";

			$stmt = $dbConnection->prepare($sql);

			$stmt->bindValue(':apartmentNumber', $apartment->apartment_number, PDO::PARAM_INT);
			$stmt->bindValue(':apartmentOccupancyStatus', $apartment->occupancy_status, PDO::PARAM_STR);
			$stmt->bindValue(':buildingsBuildingId', $apartment->buildings_building_id, PDO::PARAM_INT);
			$stmt->bindValue(':buildingsSubdivisionId', $apartment->subdivisions_subdivision_id, PDO::PARAM_INT);
			$stmt->bindValue(':usersUserId', $apartment->users_user_id, PDO::PARAM_INT);

			if ($stmt->execute()){
				$savingStatus = 'Success';
			} else {
				$savingStatus = 'Failed';
				echo "Some record failed to get stored";
				var_dump($apartment);
				// exit;
			}
		}

		return $savingStatus;

	}
	

}