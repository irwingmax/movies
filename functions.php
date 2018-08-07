<?php

require __DIR__ . '/vendor/autoload.php';

use Irwing\Movies\controllers\RequestData;
use Irwing\Movies\Models\InsertData;
use Irwing\Movies\Models\DeleteData;
use Irwing\Movies\Models\SelectData;
use Irwing\Movies\Models\UpdateData;
use Irwing\Movies\Models\Connect;
use Core\Router;

const MOVIES_URL = '192.168.33.11';

function insertData()
{
    try {
        $requestObject = new RequestData();
        $insertObject = new InsertData();
        $insertObject->insert(
            $requestObject->generateID(),
            $requestObject->obtainTitulo(),
            $requestObject->obtainDiretor(),
            $requestObject->obtainAtor()
        );
        header("Location: http://" . MOVIES_URL . "");
    } catch (PDOException $e) {
        header("Location: http://" . MOVIES_URL . "/adiciona-filmes.php?r=error");
    }
}

function updateData()
{
    try {
        $requestObject = new RequestData();
        $updateObject = new UpdateData();
        $updateObject->update(
            $requestObject->obtainMovieId(),
            $requestObject->obtainTitulo(),
            $requestObject->obtainDiretor(),
            $requestObject->obtainAtor()
        );
        header("Location: http://" . MOVIES_URL . "");
    } catch (PDOException $e) {
        header("Location: http://" . MOVIES_URL . "/atualiza-filmes.php?r=error");
    }
}

function deleteData()
{
    $deleteObject = new DeleteData();
    $deleteObject->delete();
    header("Location: http://" . MOVIES_URL . "");
}

function showData()
{
    $selectObject = new SelectData();
    return $selectObject->getData();
}


function showDataForUpdate()
{
    $selectObjectById = new SelectData();
    return $selectObjectById->getDataById();
}


//TWIG FUNCTIONS
function twigIndex()
{
    $viewFolder = __DIR__ . "/templates";
    $loader = new Twig_Loader_Filesystem($viewFolder);
    $twig = new Twig_Environment($loader);

    echo $twig->render('index.html', array('postsMovies'=>showData()));
}

function twigAdcionaFilmes()
{
    $viewFolder = __DIR__ . "/templates";
    $loader = new Twig_Loader_Filesystem($viewFolder);
    $twig = new Twig_Environment($loader);

    echo $twig->render('adiciona-filmes.html');
}

function twigAtualizaFilmes()
{
    $viewFolder = __DIR__ . "/templates";
    $loader = new Twig_Loader_Filesystem($viewFolder);
    $twig = new Twig_Environment($loader);

    echo $twig->render('atualiza-filmes.html', array('postsMoviesById'=>showDataForUpdate()));
}

function twigErrorPage()
{
    $viewFolder = __DIR__ . "/templates";
    $loader = new Twig_Loader_Filesystem($viewFolder);
    $twig = new Twig_Environment($loader);

    echo $twig->render('error.html');
}

function routear()
{
    $nova_rota = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $nova_rota = explode('/', $nova_rota);

    $permissao = array('',
                        'adiciona-filmes',
                        'atualiza-filmes',
                        'interacao',
                        'interacao-delete',
                        'interacao-update',
                        'index.php');

    if (!in_array($nova_rota[2], $permissao)) {
        header("Location: http://" . MOVIES_URL . "/error.php");
    }
}
