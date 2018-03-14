<?php

require __DIR__ . '/vendor/autoload.php';

use Irwing\Movies\controllers\RequestData;
use Irwing\Movies\Models\InsertData;
use Irwing\Movies\Models\DeleteData;
use Irwing\Movies\Models\SelectData;
use Irwing\Movies\Models\UpdateData;

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
        header("Location: http://localhost:9000/movies/");
    } catch (PDOException $e) {
        header("Location: http://localhost:9000/movies/adiciona-filmes.php?r=error");
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
        header("Location: http://localhost:9000/movies/");
    } catch (PDOException $e) {
        header("Location: http://localhost:9000/movies/atualiza-filmes.php?r=error");
    }
}

function deleteData()
{
    $deleteObject = new DeleteData();
    $deleteObject->delete();
    header("Location: http://localhost:9000/movies");
}

function showData()
{
    $selectObject = new SelectData();
    return $selectObject->getData();
}


function showDataForUpdate(){
    $selectObjectById = new SelectData();
    return $selectObjectById->getDataById();
}


//TWIG FUNCTIONS
function twigIndex()
{
    $viewFolder = __DIR__ . "/views";
    $loader = new Twig_Loader_Filesystem($viewFolder);
    $twig = new Twig_Environment($loader);

    echo $twig->render('index.html', array('postsMovies'=>showData()));
}

function twigAdcionaFilmes()
{
    $viewFolder = __DIR__ . "/views";
    $loader = new Twig_Loader_Filesystem($viewFolder);
    $twig = new Twig_Environment($loader);

    echo $twig->render('adiciona-filmes.html');
}

function twigAtualizaFilmes()
{
    $viewFolder = __DIR__ . "/views";
    $loader = new Twig_Loader_Filesystem($viewFolder);
    $twig = new Twig_Environment($loader);

    echo $twig->render('atualiza-filmes.html', array('postsMoviesById'=>showDataForUpdate()));
}
