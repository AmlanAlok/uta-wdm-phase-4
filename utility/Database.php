<?php

class Database{

	public function getDatabaseConnection(){

		$dbHost = "localhost";
		$dbName = "city_view_db";
		$dbUser = "root";
		$dbPassword = "";

		$dsn = 'mysql:host=' . $dbHost . ';dbname=' . $dbName . ';charset=utf8';

		$dbConnection = new PDO($dsn, $dbUser, $dbPassword);

		return $dbConnection;
	}
}