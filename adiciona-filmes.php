<?php
require_once __DIR__ . '/vendor/autoload.php';

use Irwing\Movies\controllers\RequestData;
use Irwing\Movies\controllers\InsertData;

function insertData()
{
	$objRequest = new RequestData();
    $insert = new InsertData();
    $insert->insert($objRequest->getTitulo(), $objRequest->getDiretor(), $objRequest->getSinopse());
}

function twigAdcionaFilmes()
{
    $viewFolder = __DIR__ . "/views";
    $loader = new Twig_Loader_Filesystem($viewFolder);

    $twig = new Twig_Environment($loader);

    echo $twig->render('adiciona-filmes.html');
}

insertData();
twigAdcionaFilmes();
