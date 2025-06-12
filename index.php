<?php

$students = [
    ['name' => 'Francesco'],
    ['firstname' => 'Antonio'],
    ['nome' => 'Antonio'],
    ['name' => 'Luigi'],
];
//Inglese
//Singolare
//Prima lettera Maiuscola


class Person
{
    //Nome, Congome, Eta;
    public string $firstname;
    public string $lastname;
    public int $age;
    //Attributi = Variabile
    //Metodi = Funzioni
    //Costruttore 
    public  function __construct($nome, $cognome, $eta)
    {

        // //prendimi 'Francesco' e mettilo dentro $firstname
        $this->firstname  = $nome;
        $this->lastname  = $cognome;
        $this->age  = $eta;
    }

    public function sayHello()
    {
        echo "Ciao mi chiamo $this->firstname $this->lastname \n";
    }
}



$francesco = new Person('Francesco', 'Mansi', 18); //Istanziare una nuova classe
$marco = new Person('Marco', 'Mansi', 18); //Istanziare una nuova classe

//Ciao mi chiamo Nome Congome.

//echo "Caoo mi chiamo $marco->firstname $marco->lastname \n";

$francesco->sayHello();
$marco->sayHello();
