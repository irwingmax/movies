<?php
namespace Irwing\Movies\Controllers;

class RequestData implements \Irwing\Movies\Controllers\Interfaces\RequestDataInterface
{
    private $titulo;
    private $diretor;
    private $ator;
    private $movieID;
    private $movieIDUpdate;

    public function generateID()
    {
        $n = mt_rand();
        $this->movieID = hash('md5', "$n");

        return $this->movieID;
    }

    public function obtainTitulo()
    {
        $this->titulo = isset($_POST['titulo']) ? $_POST['titulo'] : '';
        return $this->titulo;
    }

    public function obtainDiretor()
    {
        $this->diretor = isset($_POST['diretor']) ? $_POST['diretor'] : '';
        return $this->diretor;
    }

    public function obtainAtor()
    {
        $this->ator = isset($_POST['ator']) ? $_POST['ator'] : '';
        return $this->ator;
    }

    public function obtainMovieId()
    {
        $this->movieIDUpdate = isset($_POST['movieID']) ? $_POST['movieID'] : '';
        return $this->movieIDUpdate;
    }
}
