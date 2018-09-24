<?php
namespace Irwing\Movies\Models\Interfaces;

interface InsertDataInterface
{
    abstract public function insert($id, $titulo, $diretor, $ator);
}
