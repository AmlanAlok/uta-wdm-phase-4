<?php

require 'SubdivisionService.php';

class AdminService {

	function checkFeature($userId){
		
		if (isset($_POST['new-subdivision-name'])){
	        echo "Add New Subdivision ";
	        $newSubdivisionName = $_POST['new-subdivision-name'];
		    echo "----newSubdivisionName = $newSubdivisionName";

		    $subdivisionService = new SubdivisionService();
		    $output = $subdivisionService->addNewSubdivision($newSubdivisionName, $userId);

		    return $output;

	    }

	    
	}
}