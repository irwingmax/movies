<?php

namespace Irwing\Movies\Controllers;

use Irwing\Movies\Models\Connect;
use PDO;

class SelectData
{
	function getData()
	{
		$objConnect = new Connect();
		$objConnect->connectar();
		$selectQuery = "SELECT titulo, diretor, sinopse FROM tb_movies";
		$selectStmt = $objConnect->getConnection()->prepare($selectQuery);
		$selectStmt->execute();

		$selectResult = $selectStmt->setFetchMode(PDO::FETCH_ASSOC);

		return $selectResult;
	}
}