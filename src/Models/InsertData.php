<?php
    namespace Irwing\Movies\Models;

    use PDO;

class InsertData implements \Irwing\Movies\Models\Interfaces\InsertDataInterface
{
    public function insert($id, $titulo, $diretor, $ator)
    {
        $objConnect = new Connect();
        $objConnect->connectar();
        $insertQuery = "INSERT INTO tb_movies (movieID, title, director, actor) 
                        VALUES (:movieID, :title, :director, :actor)";
        $insertStmt = $objConnect->getConnection()->prepare($insertQuery);
        $insertStmt->bindParam(':movieID', $id, PDO::PARAM_STR, 99);
        $insertStmt->bindParam(':title', $titulo, PDO::PARAM_STR, 10);
        $insertStmt->bindParam(':director', $diretor, PDO::PARAM_STR, 10);
        $insertStmt->bindParam(':actor', $ator, PDO::PARAM_STR, 10);
        $insertStmt->execute();
    }
}
