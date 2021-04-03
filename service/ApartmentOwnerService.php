
<?php

require '../../service/MRService.php';
require '../../service/ComplaintsService.php';

class ApartmentOwnerService {


	function checkFeature($userId){

		if (isset($_POST['maintenance-request-input-message'])){

			$mrMsg = $_POST['maintenance-request-input-message'];

			$mrService = new MRService();
			$mrService->saveMR($userId, $mrMsg);
			
		}
	}

	function fetchAllMR(){
		$mrService = new MRService();
		return $mrService->fetchAllMR();
	}

	function checkComplaints($userId){

		if (isset($_POST['complaints-request-input-message'])){

			$cmMsg = $_POST['complaints-request-input-message'];

			$cmService = new ComplaintsService();
			$cmService->saveComplaints($userId, $cmMsg);
			
		}
	}

	function fetchAllComplaints(){
		$cmService = new ComplaintsService();
		return $cmService->fetchAllComplaints();
	}
}