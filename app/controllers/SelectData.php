<?php

namespace Irwing\Movies\Controllers;

use Irwing\Movies\Models\Connect;
use PDO;

class SelectData
{
	public function getData()
	{
		$objConnect = new Connect();
		$objConnect->connectar();
		$selectQuery = "SELECT Title, Director, Actor FROM tb_movies";
		$selectStmt = $objConnect->getConnection()->prepare($selectQuery);
		$selectStmt->execute();

		$resultSelect = $selectStmt->fetchAll(PDO::FETCH_ASSOC);

		return $resultSelect;

	}
}