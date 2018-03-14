<?php

namespace Irwing\Movies\Models;

use PDO;

class SelectData
{
    public function getData()
    {
        try {
            $objConnect = new Connect();
            $objConnect->connectar();
            $selectQuery = "SELECT movieID, Title, Director, Actor FROM tb_movies";
            $selectStmt = $objConnect->getConnection()->prepare($selectQuery);
            $selectStmt->execute();

            $resultSelect = $selectStmt->fetchAll(PDO::FETCH_ASSOC);

            return $resultSelect;
        } catch (PDOException $e) {
            header("Location: http://localhost:9000/movies?result=error");
        }
    }

    public function getDataById()
    {
        try {
            $objConnect = new Connect();
            $objConnect->connectar();
            if (($_GET['action'] == 'up') && isset($_GET['id'])) {
                $id = $_GET['id'];
                $selectByIdQuery = "SELECT movieID, Title, Director, Actor FROM tb_movies WHERE movieID = '$id'";
                $selectByIdStmt = $objConnect->getConnection()->prepare($selectByIdQuery);
                $selectByIdStmt->execute();

                $resultSelectById = $selectByIdStmt->fetchAll(PDO::FETCH_ASSOC);

                return $resultSelectById;
            }

        } catch (PDOException $e) {
            header("Location: http://localhost:9000/movies?result=error");
        }
    }
}
