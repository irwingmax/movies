<?php 

	namespace Irwing\Movies\controllers;
	require_once '/Applications/XAMPP/xamppfiles/htdocs/movies/vendor/autoload.php';

	use app\models\Connect;
	use PDO;


	Class InsertData{

		function insert($titulo, $diretor, $sinopse){
				$objConnect = new \app\models\Connect();
				$objConnect->connectar();
				$insertQuery = "INSERT INTO tb_movies (title, director, sinopse) VALUES ('$titulo', '$diretor', '$sinopse')";
				$insertStmt = $objConnect->getConnection()->prepare($insertQuery);
				$insertStmt->bindParam(':titulo', $titulo, PDO::PARAM_STR, 99);
				$insertStmt->execute();


		}
	}
