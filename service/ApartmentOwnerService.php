
<?php

require '../../service/MRService.php';

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
}