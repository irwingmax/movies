<?
// require __DIR__ . '/vendor/autoload.php';

// $viewFolder = __DIR__ . "/views";
// $loader = new Twig_Loader_Filesystem($viewFolder);

// $twig = new Twig_Environment($loader);

// echo $twig->render('adiciona-filmes.html');
require('models/Connect.php');

$conexao = new Connect();

$conexao->connectar();