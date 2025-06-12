<?php

class Company
{
    public string $name;
    public string $location;
    public int $employee;

    public function __construct($primo, $secondo, $terzo = 0)
    {
        $this->name = $primo;
        $this->location = $secondo;
        $this->employee = $terzo;
    }
}

$company1 = new Company('Apple', 'USA', 3);
$company2 = new Company('Barilla', 'ITA', 3);
$company3 = new Company('Nintendo', 'JAP');
$company4 = new Company('Nokia', 'FIN', 10);
$company5 = new Company('Xioami', 'CHI', 3);

// var_dump($company1);
// var_dump($company2);
// var_dump($company3);
// var_dump($company4);
// var_dump($company5);
