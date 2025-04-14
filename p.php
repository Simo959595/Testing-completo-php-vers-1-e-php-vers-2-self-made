<?php

// Classe base Armi
class Armi
{
    public $nome;
    public $munizioni;
    public $tipologia;
    public $utilizzo;
    public $prezzo;

    public function __construct($nome, $munizioni, $tipologia, $utilizzo, $prezzo)
    {
        $this->nome = $nome;
        $this->munizioni = $munizioni;
        $this->tipologia = $tipologia;
        $this->utilizzo = $utilizzo;
        $this->prezzo = $prezzo;
    }
}

// Classe Munizioni figlia di Armi
class Munizioni extends Armi
{
    public function __construct($nome, $munizioni, $tipologia, $utilizzo, $prezzo)
    {
        parent::__construct($nome, $munizioni, $tipologia, $utilizzo, $prezzo);
    }
}

// Classe Nato figlia di Munizioni
class Nato extends Munizioni
{
    public $nato;

    public function __construct($nome, $munizioni, $tipologia, $utilizzo, $prezzo, $nato)
    {
        parent::__construct($nome, $munizioni, $tipologia, $utilizzo, $prezzo);
        $this->nato = $nato;
    }
}

// Creo l'oggetto
$c = new Nato("Uzi", 32, "Mitra leggero", "Militare", "3.000 €", "9mm");

// Output
echo "L'arma {$c->nome} ha una capienza di {$c->munizioni} munizioni di tipo {$c->nato}, è una tipologia di {$c->tipologia}, con utilizzo per {$c->utilizzo}, e ha un costo di circa {$c->prezzo}.\n";

?>  