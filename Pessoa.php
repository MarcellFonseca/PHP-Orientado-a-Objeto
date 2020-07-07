<?php 
    class Pessoa{
        
		
		//Criando o atributo "name" ou "nome"
        private $name; 
		//Criando o atributo "age" ou "idade"
        private $age; 
		//Criando o atributo "weight" ou "peso"
        private $weight; 
		//Criando o atributo "gender" ou "genero ou sexo"
        private $gender;

		//Gettter e setter de "" ou ""
        public function getName(){
            return $this->name; 
        }
        public function setName($argName){
             $this->name = $argName; 
        }

        //Gettter e setter de "" ou ""
        public function getAge(){
            return $this->age; 
        }
        public function setAge($argAge){
             $this->age = $argAge; 
        }

        //Gettter e setter de "weight" ou "peso"
        public function getWeight(){
            return $this->weight; 
        }
        public function setWeight($argWeight){
             $this->weight = $argWeight; 
        }

        //Gettter e setter de "gender" ou "genero"
        public function getGender(){
            return $this->gender; 
        }
        public function setGender($argGender){
             $this->gender = $argGender; 
        }

    }
	
	//Marcell Gonçalves Fonseca 2ºDS A//
?> 