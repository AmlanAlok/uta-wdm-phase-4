<?php

require 'SubdivisionService.php';
require 'BuildingService.php';

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
	}

	function fetchAllSubdivisions(){

		$subdivisionService = new SubdivisionService();
		$subdivisionList = $subdivisionService->fetchAllSubdivisions();

		return $subdivisionList;

	}

}