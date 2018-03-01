<?php
    namespace Irwing\Movies\Controllers;

    use Irwing\Movies\Models\Connect;
    use PDO;

class InsertData
{
    public function insert($titulo, $diretor, $ator)
    {
        $objConnect = new Connect();
        $objConnect->connectar();
        $insertQuery = "INSERT INTO tb_movies (title, director, actor) VALUES ('$titulo', '$diretor', '$ator')";
        $insertStmt = $objConnect->getConnection()->prepare($insertQuery);
        $insertStmt->bindParam(':titulo', $titulo, PDO::PARAM_STR, 99);
        $insertStmt->execute();
    }
}
