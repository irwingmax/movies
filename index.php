<?php

require __DIR__ . '/vendor/autoload.php';

use Irwing\Movies\Controllers\SelectData;

function showData()
{
	$objSelect = new SelectData();
    $data = $objSelect->getData();

    return $data;
}

function twigIndex()
{
    $viewFolder = __DIR__ . "/views";
    $loader = new Twig_Loader_Filesystem($viewFolder);
    $twig = new Twig_Environment($loader);

    echo $twig->render('index.html', array('postsMovies'=>showData()));

}

twigIndex();
