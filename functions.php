<?php

require __DIR__ . '/vendor/autoload.php';

use Irwing\Movies\controllers\RequestData;
use Irwing\Movies\Models\InsertData;
use Irwing\Movies\Models\DeleteData;
use Irwing\Movies\Models\SelectData;
use Irwing\Movies\Models\UpdateData;
use Core\Router;




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
    $viewFolder = __DIR__ . "/app/views";
    $loader = new Twig_Loader_Filesystem($viewFolder);
    $twig = new Twig_Environment($loader);

    echo $twig->render('index.html', array('postsMovies'=>showData()));
}

function twigAdcionaFilmes()
{
    $viewFolder = __DIR__ . "/app/views";
    $loader = new Twig_Loader_Filesystem($viewFolder);
    $twig = new Twig_Environment($loader);

    echo $twig->render('adiciona-filmes.html');
}

function twigAtualizaFilmes()
{
    $viewFolder = __DIR__ . "/app/views";
    $loader = new Twig_Loader_Filesystem($viewFolder);
    $twig = new Twig_Environment($loader);

    echo $twig->render('atualiza-filmes.html', array('postsMoviesById'=>showDataForUpdate()));
}

function routear()
{
    if (isset($_GET['uri'])){
        $rota = $_GET['uri'];

        $permissao = array('adiciona-filmes', 'atualiza-filmes');

        if (substr_count($rota, '/') > 0){
            $rota = explode('/', $rota);
            $pagina = (file_exists($rota[0].'.php') && in_array($rota[0], $permissao)) ? $rota[0] : 'erro';
            echo "teste1";

        }else{
            $pagina = (file_exists($rota.'.php') && in_array($rota, $permissao)) ? $rota : 'erro';
            echo "teste2";
        }

        header("Location: http://localhost:9000/movies/".$pagina.".php");
    }


}