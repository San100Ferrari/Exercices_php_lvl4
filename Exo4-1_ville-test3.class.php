<?php

//création de la classe
class ville
{
	public $nom;
	public $departement;

	public function __construct($n, $dpt){
        $this->nom = $n;
        $this->departement = $dpt;
    }

	public function getinfo(){
        
		return "La ville de ".$this->nom." est dans le département : ".$this->departement."<br />";
	}
}


?>