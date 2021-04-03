<?php

// require 'MasterRecordService.php';
require 'SubdivisionService.php';
// require '../model/SubdivisionUtilityBillRecord.php';
require 'UserService.php';

class SubdivisionManagerService {

	function communityServiceReportData($userId){

		$subdivisionService = new SubdivisionService();
		$subdivisionRecord = $subdivisionService->getSubdivisionRecordByUserId($userId);
		// var_dump($subdivisionRecord);

		$subdivisionId = $subdivisionRecord->subdivision_id;
		$date = new DateTime("last month", new DateTimeZone('America/Chicago') );
		$month = $date->format('m');
		$year = $date->format('Y');

		return $subdivisionService->getCurrentMonthCommunityServiceBillsAllApartments($subdivisionId, $month, $year);

	}

	function utilityReportData($userId){

		$subdivisionService = new SubdivisionService();
		$subdivisionRecord = $subdivisionService->getSubdivisionRecordByUserId($userId);
		// var_dump($subdivisionRecord);

		$subdivisionId = $subdivisionRecord->subdivision_id;
		$date = new DateTime("last month", new DateTimeZone('America/Chicago') );
		$month = $date->format('m');
		$year = $date->format('Y');

		return $subdivisionService->getCurrentMonthUtilityBillsAllApartments($subdivisionId, $month, $year);

	}

	function getApartmentCount($userId){
		$subdivisionService = new SubdivisionService();
		$subdivisionRecord = $subdivisionService->getSubdivisionRecordByUserId($userId);
		// var_dump($subdivisionRecord);

		$subdivisionId = $subdivisionRecord->subdivision_id;

		$date = new DateTime("last month", new DateTimeZone('America/Chicago') );
		$month = $date->format('m');
		$year = $date->format('Y');

		return $subdivisionService->getApartmentCount($subdivisionId, $month, $year);
	}

	function getUtilityBillTotal($userId){

		$subdivisionService = new SubdivisionService();
		$subdivisionRecord = $subdivisionService->getSubdivisionRecordByUserId($userId);
		// var_dump($subdivisionRecord);

		$subdivisionId = $subdivisionRecord->subdivision_id;

		$date = new DateTime("last month", new DateTimeZone('America/Chicago') );
		$month = $date->format('m');
		$year = $date->format('Y');

		return $subdivisionService->getUtilityBillTotal($subdivisionId, $month, $year);
	}

	function getPreviousMonth(){
		$date = new DateTime("last month", new DateTimeZone('America/Chicago') );
		$month = $date->format('m');
		return $month;
	}

	function getPreviousMonthYear(){
		$date = new DateTime("last month", new DateTimeZone('America/Chicago') );

		return  $date->format('Y');
	}

	function getPersonalDetails($userId){
		$userService = new UserService();
    	return $userService->getuserById($userId);
	}

	function getCommunityServiceApartmentCount($userId){
		$subdivisionService = new SubdivisionService();
		$subdivisionRecord = $subdivisionService->getSubdivisionRecordByUserId($userId);
		// var_dump($subdivisionRecord);

		$subdivisionId = $subdivisionRecord->subdivision_id;

		$date = new DateTime("last month", new DateTimeZone('America/Chicago') );
		$month = $date->format('m');
		$year = $date->format('Y');

		return $subdivisionService->getCommunityServiceApartmentCount($subdivisionId, $month, $year);
	}

	function getCommunityServiceBillTotal($userId){

		$subdivisionService = new SubdivisionService();
		$subdivisionRecord = $subdivisionService->getSubdivisionRecordByUserId($userId);
		// var_dump($subdivisionRecord);

		$subdivisionId = $subdivisionRecord->subdivision_id;

		$date = new DateTime("last month", new DateTimeZone('America/Chicago') );
		$month = $date->format('m');
		$year = $date->format('Y');

		return $subdivisionService->getCommunityServiceBillTotal($subdivisionId, $month, $year);
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