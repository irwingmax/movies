<?php  
	namespace app\controllers;
	require_once '/Applications/XAMPP/xamppfiles/htdocs/movies/vendor/autoload.php';

	Class RequestData{
		private $titulo;
		private $diretor;
		private $sinopse;
		private $arrData;

		public function getRequest(){

			$this->titulo = isset($_POST['titulo']) ? $_POST['titulo'] : '';
			$this->diretor = isset($_POST['diretor']) ? $_POST['diretor'] : '';
			$this->sinopse = isset($_POST['diretor']) ? $_POST['diretor'] : '';

			$this->arrData  = array(
				'titulo'  => $this->titulo,
				'diretor' => $this->diretor,
				'sinopse' => $this->sinopse,
			);

			return $this->arrData;
		}
	}