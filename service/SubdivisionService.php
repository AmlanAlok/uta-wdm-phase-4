<?php

require '../../utility/Database.php';
require '../../entity/Subdivision.php';
require '../../entity/ApartmentUtilityBill.php';
require '../../model/SubdivisionUtilityBillRecord.php';

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

	function getSubdivisionRecordByUserId($userId){
		$dbObject = new Database();
		$dbConnection = $dbObject->getDatabaseConnection();
		$sql = "SELECT * from subdivisions WHERE users_user_id = :userId";
		$stmt = $dbConnection->prepare($sql);
		$stmt->bindValue(':userId', $userId, PDO::PARAM_INT);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'Subdivision');

		if ($stmt->execute()){
			return $stmt->fetch();
		} else{
			echo "Failed";
			return 'Failed';
		}

	}

	function getCurrentMonthBillsAllApartments($subdivisionId, $month, $year){
		$dbObject = new Database();
		$dbConnection = $dbObject->getDatabaseConnection();
		$sql = "SELECT b.building_name, a.apartment_number, aub.utility_monthly_bill_amount, aub.month, aub.year, u.utility_name from apartment_utility_bills as aub
		inner join apartments as a on aub.apartments_apartment_id = a.apartment_id
		inner join buildings as b on aub.buildings_building_id = b.building_id
		inner join utilities as u on aub.utilities_utility_id = u.utility_id
		WHERE aub.subdivisions_subdivision_id = :subdivisionId
		and aub.month = :month
		and aub.year = :year
		and not u.utility_name = 'internet'
		order by b.building_name, a.apartment_number, u.utility_name";

		$stmt = $dbConnection->prepare($sql);

		$stmt->bindValue(':subdivisionId', $subdivisionId, PDO::PARAM_INT);
		$stmt->bindValue(':month', $month, PDO::PARAM_INT);
		$stmt->bindValue(':year', $year, PDO::PARAM_INT);
		// $stmt->bindValue(':utilityName', $utilityName, PDO::PARAM_STR);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'SubdivisionUtilityBillRecord');

		if ($stmt->execute()){
			return $stmt->fetchAll();
		} else{
			echo "Failed";
			return 'Failed';
		}
	}

	function getApartmentCount($subdivisionId, $month, $year){
		$dbObject = new Database();
		$dbConnection = $dbObject->getDatabaseConnection();
		$sql = "SELECT count(a.apartment_number) from apartment_utility_bills as aub
		inner join apartments as a on aub.apartments_apartment_id = a.apartment_id
		WHERE aub.subdivisions_subdivision_id = :subdivisionId
		and aub.month = :month
		and aub.year = :year";

		$stmt = $dbConnection->prepare($sql);

		$stmt->bindValue(':subdivisionId', $subdivisionId, PDO::PARAM_INT);
		$stmt->bindValue(':month', $month, PDO::PARAM_INT);
		$stmt->bindValue(':year', $year, PDO::PARAM_INT);

		if ($stmt->execute()){
			return $stmt->fetch();
		} else{
			echo "Failed";
			return 'Failed';
		}
	}

	function getUtilityBillTotal($subdivisionId, $month, $year){
		$dbObject = new Database();
		$dbConnection = $dbObject->getDatabaseConnection();
		$sql = "SELECT sum(aub.utility_monthly_bill_amount) from apartment_utility_bills as aub
		inner join apartments as a on aub.apartments_apartment_id = a.apartment_id
		WHERE aub.subdivisions_subdivision_id = :subdivisionId
		and aub.month = :month
		and aub.year = :year";

		$stmt = $dbConnection->prepare($sql);

		$stmt->bindValue(':subdivisionId', $subdivisionId, PDO::PARAM_INT);
		$stmt->bindValue(':month', $month, PDO::PARAM_INT);
		$stmt->bindValue(':year', $year, PDO::PARAM_INT);

		if ($stmt->execute()){
			return $stmt->fetch();
		} else{
			echo "Failed";
			return 'Failed';
		}
	}



}