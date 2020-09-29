<?php 

echo phpversion();

class ville {
    public $nom;
    public $depatement;

    public function getInfo() {
    $texte= "La ville de $this->$nom est dans le département : $this->$departement \n";
    return $texte;
    }
}

//objets
$ville1 = new ville();
$ville1->nom="Nantes";
$ville1->departement="Loire Atlantique";

$ville2 = new ville();
$ville2->nom="Lyon";
$ville2->departement="Rhône";

echo $ville1->getInfo();
echo $ville2->getInfo();


?>    