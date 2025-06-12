## **ESERCIZIO 1**

Utilizzando i principi di OOP e di Ereditarietà, creare una struttura a classi come segue:

```php
+-|Continent 
+-----------|Country 
+--------------------|Region 
+---------------------------|Province 
+------------------------------------|City
+------------------------------------------|Street
```

Continent genitore con figlio Country, con a sua volta un figlio Region, con a sua volta un figlio Province, con a sua volta un figlio City e infine un figlio Street:

Ogni classe avrà un attributo public del tipo:

```php
$nameContinent: 
$nameCountry; 
$nameRegion: 
$nameProvince: 
$nameCity:
$nameStreet:
```

La prima classe Genitore sarà strutturata come segue:

```php
class Continent
{
  public $nameContinent;

  public function __construct($continent)
  {
    $this->nameContinent = $continent;
  }
}
```

Voglio istanziare un nuovo oggetto chiamato **$myLocation,** subito dopo richiamare un metodo pubblico **getMyCurrentLocation() che mi stampi a video** :

`"Mi trovo in Europa, Italia, Puglia, Ba, Monopoli, Via Roma"`