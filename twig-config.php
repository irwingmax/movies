<?php

require __DIR__ . '/vendor/autoload.php';

$viewFolder = __DIR__ . "/views";
$loader = new Twig_Loader_Filesystem($viewFolder);

$twig = new Twig_Environment($loader, [
	'cache' => __DIR__ . "/views_c"
]);

print $twig->render('index.twig', array('name' => 'Irwing Max'));