<?php

require __DIR__ . '/vendor/autoload.php';

use Irwing\Movies\Controller\SelectData;

function searchData()
{
	$objSelect = new SelectData();
	$objSelect->getData();

	foreach(new TableRows(new RecursiveArrayIterator()))
}

$viewFolder = __DIR__ . "/views";
$loader = new Twig_Loader_Filesystem($viewFolder);

$twig = new Twig_Environment($loader);

echo $twig->render('index.html');
