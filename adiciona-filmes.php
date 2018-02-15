<?
require_once __DIR__ . '/vendor/autoload.php';

use app\controllers\RequestData;
use app\controllers\InsertData;

function requisitarDados(){
	$objRequest = new \app\controllers\RequestData();
	return $objRequest->getRequest();	
}

function insertData(){
	requisitarDados();
	$insert = new \app\controllers\InsertData();
	$dados = $requisitarDados();
	$insert->insert(requisitarDados()['titulo'], requisitarDados()['diretor'], requisitarDados()['sinopse']);
}

function twigAdcionaFilmes(){
	$viewFolder = __DIR__ . "/views";
	$loader = new Twig_Loader_Filesystem($viewFolder);

	$twig = new Twig_Environment($loader);

	echo $twig->render('adiciona-filmes.html');
}

insertData();
twigAdcionaFilmes();


