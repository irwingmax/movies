<?php

	Class Movies {
		private $titulo;
		private $diretor; 
		private $sinopse ;

		function setMovies($title, $director, $sinopse){
			$this->titulo = $title;
			$this->diretor = $director;
			$this->sinopse = $sinopse;
		}

		function getMovies(){
			echo $this->titulo;
		}
	}


	$filme = new Movies();
	$filme->setMovie()
	$filme->getMovies();