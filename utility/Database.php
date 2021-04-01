<?php

class Database {

	public function getDatabaseConnection(){

		$dbHost = "localhost";
		$dbName = "city_view_db";
		$dbUser = "root";
		$dbPassword = "";

		$dsn = 'mysql:host=' . $dbHost . ';dbname=' . $dbName . ';charset=utf8';

		try {

			$dbConnection = new PDO($dsn, $dbUser, $dbPassword);
			$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $dbConnection;

		} catch (PDOException $e) {
			echo $e->getMessage();
			// exit;
		}

		
	}
}