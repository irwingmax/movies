<?php 
namespace Irwing\Movies\Twig;

class TemplateRendering
{
	private $viewFolder;
    private $loader;
    private $twig;

    public function rendering($template){
    	$this->viewFolder = __DIR__ . "/templates";
    	$this->loader = new Twig_Loader_Filesystem($this->viewFolder);
    	$this->twig = new Twig_Environment($loader);

    	echo $this->twig->render($template);
    }
}