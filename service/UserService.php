<?php

require '../entity/User.php';

class UserService {

	function getUserByEmailIdAndPassword($dbConnection, $emailId, $password){

		$sql_query_to_fetch_user_via_email_id = "SELECT * FROM users where email_id = :emailId and password = :password";

		$stmt = $dbConnection->prepare($sql_query_to_fetch_user_via_email_id);
		$stmt->bindValue(':emailId', $emailId, PDO::PARAM_STR);
		$stmt->bindValue(':password', $password, PDO::PARAM_STR);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'User');

		if ($stmt->execute()){
			return $stmt->fetch();
		}
		// else{
		// 	echo "Did not work";
		// }
	}

}