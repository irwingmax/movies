<?php

Class Connect{

	private $servername;
	private $username;
	private $password;
	private $dbname;

	function connectar(){
		$this->servername =  "localhost";
		$this->username   =  "root";
		$this->password   =  "irwing";
		$this->dbname     =  "db_movies";

		try{
			$connection = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
			$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			echo "Conectado";
		}catch(PDOException $e){
			echo "Não Conectado: " . $e->getMessage();
		}
	}
}