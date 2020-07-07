<?php 
    class Livro{ 

        //Criando o atributo "title" ou "titulo"
        private $title; 
		//Criando o atributo "author" ou "autor"
        private $author; 
		//Criando o atributo "year" ou "ano"
        private $year; 
		//Criando o atributo "edition" ou "edição"
        private $edition; 

        
        //Gettter e setter de "title" ou "titulo"
        public function getTitle(){
            return $this->title; 
        }
        public function setTitle($argTitle){
             $this->title = $argTitle; 
        }

        //Gettter e setter de "author" ou "autor"
        public function getAuthor(){
            return $this->author; 
        }
        public function setAuthor($argAuthor){
             $this->author = $argAuthor; 
        }

        //Gettter e setter de "year" ou "ano"
        public function getYear(){
            return $this->year; 
        }
        public function setYear($argYear){
             $this->year = $argYear; 
        }

        //Gettter e setter de "edition" ou "edição"
        public function getEdition(){
            return $this->edition; 
        }
        public function setEdition($argEdition){
             $this->edition = $argEdition; 
        }

    }
	//Marcell Gonçalves Fonseca 2ºDS A//
?> 