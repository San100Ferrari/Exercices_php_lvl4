<?php


//création de la class
class personne {
    private $nom;
    private $prenom;
    private $adresse;

    public function __construct($nom,$prenom,$adresse){
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->adresse=$adresse;
    }

    public function __destruct() { //réécrire cette function correctement (le this n'est pas pris en compte car il n'est pas en couleur bleu foncé)
        echo "<script type=\"text/javascript\">alert('La personne nommée'.$this->prenom.$this->nom.'est supprimée de voq contacts')</script>";
    }

    //la f getPersonne doit return les coordonnées complètes d'une personne
    public function getPersonne(){
        return "Nom : ".$this->nom."<br /> Prénom : ".$this->prenom."<br /> Adresse : ".$this->adresse."<br />"."<br />";
    }

    //la f setAdresse doit permettre de changer l'adresse d'une personne
    public function setAdresse($new){
        $this->adresse = $new;
    }

}


?>