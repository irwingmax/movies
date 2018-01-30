<?php

	Class Movies {
		$title;
		$director;
		$sinopse;

		function __construct($titulo, $diretor, $resumo){
			$this->title    = $titulo;
			$this->director = $diretor;
			$this->sinopse  = $resumo;
		}
	}