<?php
	//Importando os codigos dos outros programas .php
    require_once 'Pessoa.php';
    require_once 'Carro.php';
    require_once 'Livro.php';



	//Criando o objeto "Person"
	$person = new Pessoa();
	//Atribuindo valores as respectivas variaveis
    $person->setName("Kit Harington");
    $person->setAge(33);
    $person->setWeight(77);
    $person->setGender("Masculino");



	//Criando o objeto "Car"
    $Car = new Carro();
	//Atribuindo valores as respectivas variaveis
    $Car->setBrand("Porsche");
    $Car->setColor("Branco");
    $Car->setSign("NAN-4004");
    $Car->setModel("Porsche");


	//Criando o objeto "Book"
    $Book = new Livro();
	//Atribuindo valores as respectivas variaveis
    $Book->setTitle("A Maldição do Titã");
    $Book->setAuthor("Rick Riordan");
    $Book->setYear(2007);
    $Book->setEdition(3);


	//Apresetando os resultados
    echo "Nome:". $person->getName() . "</br>" . "Idade:" . $person->getAge() . "</br>" . "Peso:" . $person->getWeight() . "</br>" . "Sexo:" . $person->getGender() . "</br>";

	echo "</br>";

    echo "Marca:". $Car->getBrand() . "</br>" . "Cor:" . $Car->getColor() . "</br>" . "Placa:" . $Car->getSign() . "</br>". "Modelo:" . $Car->getModel() . "</br>";

	echo "</br>";

    echo "Título:". $Book->getTitle() . "</br>" . "Autor:" . $Book->getAuthor() . "</br>" . "Ano:" . $Book->getYear() . "</br>" . "Edição:" . $Book->getEdition() . "</br>";
?>
