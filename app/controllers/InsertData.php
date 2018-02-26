<?php
    namespace Irwing\Movies\Controllers;

    use Irwing\Movies\Models\Connect;
    use PDO;

class InsertData
{
    public function insert($titulo, $diretor, $sinopse)
    {
        $objConnect = new Connect();
        $objConnect->connectar();
        $insertQuery = "INSERT INTO tb_movies (title, director, sinopse) VALUES ('$titulo', '$diretor', '$sinopse')";
        $insertStmt = $objConnect->getConnection()->prepare($insertQuery);
        $insertStmt->bindParam(':titulo', $titulo, PDO::PARAM_STR, 99);
        $insertStmt->execute();
    }
}
