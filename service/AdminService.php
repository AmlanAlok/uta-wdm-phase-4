<?php

require 'SubdivisionService.php';
require 'BuildingService.php';
require 'MasterRecordService.php';
require 'ResetPasswordService.php';

class AdminService {

	function checkFeature($userId){
		
		if (isset($_POST['new-subdivision-name'])){
	        
	        $newSubdivisionName = $_POST['new-subdivision-name'];
		    $subdivisionService = new SubdivisionService();
		    $output = $subdivisionService->addNewSubdivision($newSubdivisionName, $userId);

		    return $output;
	    }	
	    elseif (isset($_POST['new-building-name'])) {

	    	$newBuildingService = new BuildingService();
	    	$output = $newBuildingService->addNewBuilding($userId);

	    	return $output;
	    }   
	    elseif (isset($_POST['new-password']) && isset($_POST['confirm-password']) && isset($_POST['user-id'])){
	    	
	    	$newPassword = $_POST['new-password'];
	    	$confirmPassword = $_POST['confirm-password'];
	    	$userIdForResetPassword = $_POST['user-id'];

	    	if ($newPassword == $confirmPassword){
	    		$resetPasswordService = new ResetPasswordService();
	    		$output = $resetPasswordService->resetPassword($userIdForResetPassword, $newPassword);
	    	}
	    	else{
	    		echo "Passwords do not match";
	    	}
	    }
	    else {
	    	echo "Nothing Matched";
	    	// echo $_POST['new-password'];
	    	// echo $_POST['confirm-password'];
	    	// echo $_POST['user-id'];
	    }
	}

	function fetchAllSubdivisions(){

		$subdivisionService = new SubdivisionService();
		$subdivisionList = $subdivisionService->fetchAllSubdivisions();

		return $subdivisionList;

	}

	function fetchAllSubdivisionManagerRecords(){

		$masterRecordService = new MasterRecordService();
		$subdivisionManagerRecordList = $masterRecordService->fetchAllSubdivisionManagerRecords();
		return $subdivisionManagerRecordList;
	}

	function fetchAllBuildingManagerRecords(){

		$masterRecordService = new MasterRecordService();
		$buildingManagerRecordList = $masterRecordService->fetchAllBuildingManagerRecords();
		return $buildingManagerRecordList;
	}

	function fetchAllApartmentOwnerRecords(){

		$masterRecordService = new MasterRecordService();
		$apartmentOwnerRecordList = $masterRecordService->fetchAllApartmentOwnerRecords();
		return $apartmentOwnerRecordList;
	}

}