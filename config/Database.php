<?php 
class Database {
 
    var $servername = "localhost";
    var $username = "root";
    var $password = "nawawi932";
    var $dbname = "sokormuni";
	var $result = "";

	public function connect()
	{
		$mysqli = new mysqli(
			$this->servername, 
			$this->username,
			$this->password,
			$this->dbname
		);

		if($mysqli->connect_error){
			die("Koneksi database MySQL dan PHP Gagal ");
		}

		return $mysqli;
	}
} 