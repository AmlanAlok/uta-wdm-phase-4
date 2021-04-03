<?php

require '../../model/ApartmentUtilityBillRecord.php';

class ApartmentService {

	function getCurrentMonthUtilityBillsForApartmentForOneUtility($apartmentId, $month, $year, $utilityName){
		$dbObject = new Database();
		$dbConnection = $dbObject->getDatabaseConnection();
		$sql = "SELECT SUM(aub.utility_monthly_bill_amount), u.utility_name from apartment_utility_bills as aub
		inner join utilities as u on aub.utilities_utility_id = u.utility_id
		WHERE aub.apartments_apartment_id = :apartmentId
		and aub.year = :year and aub.month = :month
		and u.utility_name = :utilityName";

		$stmt = $dbConnection->prepare($sql);

		$stmt->bindValue(':apartmentId', $apartmentId, PDO::PARAM_INT);
		$stmt->bindValue(':utilityName', $utilityName, PDO::PARAM_STR);
		$stmt->bindValue(':month', $month, PDO::PARAM_INT);
		$stmt->bindValue(':year', $year, PDO::PARAM_INT);

		if ($stmt->execute()){
			return $stmt->fetch();
		} else{
			echo "Failed";
			return 'Failed';
		}
	}

	function getCurrentMonthUtilityBillOfApartment($apartmentId, $month, $year){
		$dbObject = new Database();
		$dbConnection = $dbObject->getDatabaseConnection();
		$sql = "SELECT aub.utility_monthly_bill_amount, u.utility_name from apartment_utility_bills as aub
		inner join utilities as u on aub.utilities_utility_id = u.utility_id
		WHERE aub.apartments_apartment_id = :apartmentId
		and aub.month = :month
		and aub.year = :year
		order by u.utility_name";

		$stmt = $dbConnection->prepare($sql);

		$stmt->bindValue(':apartmentId', $apartmentId, PDO::PARAM_INT);
		$stmt->bindValue(':month', $month, PDO::PARAM_INT);
		$stmt->bindValue(':year', $year, PDO::PARAM_INT);
		// $stmt->bindValue(':utilityName', $utilityName, PDO::PARAM_STR);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'ApartmentUtilityBillRecord');

		if ($stmt->execute()){
			return $stmt->fetchAll();
		} else{
			echo "Failed";
			return 'Failed';
		}
	}

	function getUtilityBillTotal($apartmentId, $month, $year){
		$dbObject = new Database();
		$dbConnection = $dbObject->getDatabaseConnection();
		$sql = "SELECT sum(aub.utility_monthly_bill_amount) from apartment_utility_bills as aub
		WHERE aub.apartments_apartment_id = :apartmentId
		and aub.month = :month
		and aub.year = :year";

		$stmt = $dbConnection->prepare($sql);

		$stmt->bindValue(':apartmentId', $apartmentId, PDO::PARAM_INT);
		$stmt->bindValue(':month', $month, PDO::PARAM_INT);
		$stmt->bindValue(':year', $year, PDO::PARAM_INT);

		if ($stmt->execute()){
			return $stmt->fetch();
		} else{
			echo "Failed";
			return 'Failed';
		}
	}

	function getApartmentRecordByUserId($userId){
		$dbObject = new Database();
		$dbConnection = $dbObject->getDatabaseConnection();
		$sql = "SELECT * from apartments WHERE users_user_id = :userId";
		$stmt = $dbConnection->prepare($sql);
		$stmt->bindValue(':userId', $userId, PDO::PARAM_INT);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'Apartment');

		if ($stmt->execute()){
			return $stmt->fetch();
		} else{
			echo "Failed";
			return 'Failed';
		}
	}

}