<?php
namespace app\models;
require_once '/Applications/XAMPP/xamppfiles/htdocs/movies/vendor/autoload.php';

use PDO;


Class Connect{

	private $servername;
	private $username;
	private $password;
	private $dbname;
	private $connection;

	function connectar(){
		$this->servername =  "localhost";
		$this->username   =  "root";
		$this->password   =  "irwing";
		$this->dbname     =  "db_movies";

		try{
			$this->connection = new \PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
			$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			echo "Conectado";
		}catch(PDOException $e){
			echo "Não Conectado: " . $e->getMessage();
		}

		return $this->connection;
	}

	function getConnection(){
		return $this->connection;
	}


}