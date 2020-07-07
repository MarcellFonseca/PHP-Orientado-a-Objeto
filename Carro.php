<?php 
    //Criando a classe "Carro"
    class Carro{

       //Criando o atributo "brand" ou "marca"
        private $brand; 
		//Criando o atributo "color" ou "cor"
        private $color;
		//Criando o atributo "sign" ou "placa"
        private $sign; 
		//Criando o atributo "model" ou "modelo"
        private $model; 

		//Getter e Setter de "brand" ou "marca"
        public function getBrand(){
            return $this->brand; 
        }
        public function setBrand($argBrand){
             $this->brand = $argBrand; 
        }

        //Getter e Setter de "color" ou "cor"
         public function getColor(){
            return $this->color; 
        }
        public function setColor($argColor){
             $this->color = $argColor; 
        }

        //Getter e Setter de "sign" ou "marca"
         public function getSign(){
            return $this->sign; 
        }
        public function setSign($argSign){
             $this->sign = $argSign; 
        }

        //Getter e Setter de "model" ou "modelo"
         public function getModel(){
            return $this->model; 
        }
        public function setModel($argModel){
             $this->model = $argModel; 
        }
    }
	//Marcell Gonçalves Fonseca 2ºDS A//
?> 