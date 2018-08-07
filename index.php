<?php
require __DIR__ . '/vendor/autoload.php';

use Irwing\Movies\Twig\TemplateRendering;

$objectTwig = new TemplateRendering();
$objectTwig->rendering('index.html');

