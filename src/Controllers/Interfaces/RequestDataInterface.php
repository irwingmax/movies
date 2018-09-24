<?php
namespace Irwing\Movies\Controllers\Interfaces;

interface RequestDataInterface
{
    abstract public function generateID();
    abstract public function obtainTitulo();
    abstract public function obtainDiretor();
    abstract public function obtainAtor();
    abstract public function obtainMovieId();
}
