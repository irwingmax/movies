<?php
namespace Irwing\Movies\controllers;

use PDO;
class RequestData
{
    private $titulo;
    private $diretor;
    private $ator;
    private $arrData;

    public function getTitulo()
    {
        $requestTitulo = isset($_POST['titulo']) ? $_POST['titulo'] : '';
        $this->titulo = PDO::quote($requestTitulo); //quote() para escapar a sequencia de caracteres
        return $this->arrData;
    }

    public function getDiretor()
    {
        $requestDiretor = isset($_POST['diretor']) ? $_POST['diretor'] : '';
        $this->diretor = PDO::quote($requestDiretor); //quote() para escapar a sequencia de caracteres
        return $this->diretor;
    }

    public function getAtor()
    {
        $requestAtor = isset($_POST['ator']) ? $_POST['ator'] : '';
        $this->ator = PDO::quote($requestator); //quote() para escapar a sequencia de caracteres
        return $this->ator;
    }
}