<?php

namespace Irwing\Movies\Models;

class DeleteData implements \Irwing\Movies\Models\Interfaces\DeleteDataInterface
{
    private $movieID;

    public function delete()
    {
        try {
            $objConnect = new Connect();
            $objConnect->connectar();
            if (($_GET['action'] == 'del') && isset($_GET['id'])) {
                $this->movieID = $_GET['id'];
                $deleteQuery = "DELETE FROM  tb_movies WHERE movieID =  '$this->movieID'";
                $deleteStmt = $objConnect->getConnection()->prepare($deleteQuery);
                $deleteStmt->execute();
            }
        } catch (PDOException $e) {
            header("Location: http://localhost:9000/movies?result=error");
        }
    }
}
