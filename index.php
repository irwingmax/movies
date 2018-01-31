<?php

require __DIR__ . '/vendor/autoload.php';

$viewFolder = __DIR__ . "/views";
$loader = new Twig_Loader_Filesystem($viewFolder);

$twig = new Twig_Environment($loader);

echo $twig->render('index.html');
