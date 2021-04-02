<?php

// require 'MasterRecordService.php';
require 'SubdivisionService.php';
// require '../model/SubdivisionUtilityBillRecord.php';
require 'UserService.php';

class SubdivisionManagerService {

	function utilityReportData($userId){

		$subdivisionService = new SubdivisionService();
		$subdivisionRecord = $subdivisionService->getSubdivisionRecordByUserId($userId);
		// var_dump($subdivisionRecord);

		$subdivisionId = $subdivisionRecord->subdivision_id;
		$date = new DateTime("now", new DateTimeZone('America/Chicago') );
		$month = $date->format('m');
		$year = $date->format('Y');

		$utilityBillRecordList = $subdivisionService->getCurrentMonthBillsAllApartments($subdivisionId, $month, $year, 'electricity');

		var_dump($utilityBillRecordList);

		
		// foreach ($utilityBillRecordList as $key =>  $value){
		// 	echo "e = $";
		// }
		// foreach ($aptCurrentUtilityBill as $aptUtilityRecord){

		// 	$subRecord = $new SubdivisionUtilityBillRecord();

		// 	// buildingName;
		// 		// apartmentNumber;
		// 		// electricity;
		// 		// gas;
		// 		// water;
		// }
	}

	function getPersonalDetails($userId){
		$userService = new UserService();
    	return $userService->getuserById($userId);
	}
	// function fetchAllBuildingManagerRecords(){

	// 	$masterRecordService = new MasterRecordService();
	// 	$buildingManagerRecordList = $masterRecordService->fetchAllBuildingManagerRecords();
	// 	return $buildingManagerRecordList;
	// }

	// function fetchAllApartmentOwnerRecords(){

	// 	$masterRecordService = new MasterRecordService();
	// 	$apartmentOwnerRecordList = $masterRecordService->fetchAllApartmentOwnerRecords();
	// 	return $apartmentOwnerRecordList;
	// }
}