<?php

// Creo la classe genitrice e la chiamo Armi
class Armi
{
    public $nome;
    public $munizioni;
    public $tipologia;
    public $utilizzo;
    public $prezzo;

    // Costruttore della classe
    public function __construct($nome, $munizioni, $tipologia, $utilizzo, $prezzo)
    {
        // Associo ogni componente alle proprietà
        $this->nome      = $nome;
        $this->munizioni = $munizioni;
        $this->tipologia = $tipologia;
        $this->utilizzo  = $utilizzo;
        $this->prezzo    = $prezzo;
    }
}

// Creo la classe Munizioni, figlia di Armi
class Munizioni extends Armi
{
    // Il costruttore della classe Munizioni deve chiamare il costruttore della classe Armi
    public function __construct($nome, $munizioni, $tipologia, $utilizzo, $prezzo)
    {
        parent::__construct($nome, $munizioni, $tipologia, $utilizzo, $prezzo);
}
}

// Creo la classe Nato, figlia di Munizioni
class Nato extends Munizioni
{
    public $nato;

    // Costruttore della classe Nato
    public function __construct($nome, $munizioni, $tipologia, $utilizzo, $prezzo, $nato)
    {
        parent::__construct($nome, $munizioni, $tipologia, $utilizzo, $prezzo);
        
        $this->nato =$nato;
    }
}

// Creo un'arma di tipo Nato
$c = new Nato("Uzi", "32", "Mitra Leggero", "Militare", "3.000 €", "NATO");

// Mostro le informazioni dell'arma
echo "L'arma " . $c->nome . " ha una capienza di " . $c->munizioni . " munizioni di tipo " . $c->nato . ", è una tipologia di " . $c->tipologia . " con utilizzo prevalentemente per " . $c->utilizzo . " e ha un costo di circa " . $c->prezzo . "";



// Cosa ho cambiato:

// 1. *Costruttore della classe Armi*: Il costruttore accetta tutti i parametri necessari e inizializza le proprietà della classe.

// 2. *Classe Munizioni*: Ho rimosso la dichiarazione della proprietà munizioni nella classe figlia, poiché è già presente nella classe padre. Il costruttore della classe Munizioni ora richiama il costruttore della classe Armi tramite parent::__construct().

// 3. *Classe Nato*: La classe Nato estende Munizioni e aggiunge una nuova proprietà nato. Il costruttore di Nato richiama il costruttore di Munizioni (che a sua volta chiama il costruttore di Armi) per inizializzare le proprietà ereditate, e poi inizializza la proprietà nato.

// 4. *Creazione dell'oggetto Nato*: Quando crei un oggetto della classe Nato, devi passare tutti i parametri necessari per il costruttore della classe Armi e del costruttore della classe Nato.
