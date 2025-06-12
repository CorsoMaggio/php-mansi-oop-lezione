
Creare una struttura a Classi sfruttando l’ereditarietà e seguendo queste semplici regole: 

1)Le classi **NON** devono avere attributi;

2)Ogni classe avrà un metodo specifico **PROTECTED** per stampare la sua specializzazione (Attenti all’overwrite);

3) Non Potete realizzare metodi definiti dall’utente PUBLIC per stampare il risultato, l’unico metodo PUBLIC ammesso è il Costruttore;

Esempio di Output:

```php
$magikarp = new Fish();

//Nel terminale visaulizzerete:

Sono un animale Vertebrato
Sono un animale a Sangue Freddo
Splash!

//---------------------

$serpente = new Reptile();

//Nel terminale visaulizzerete:

Sono un animale Vertebrato
Sono un animale a Sangue Freddo
Sono un Serepnte
```