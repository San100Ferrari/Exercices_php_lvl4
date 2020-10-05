<?php


require 'Exo4-3_personne.class.php';

//création des objets
$client = new personne('Geelsen','Jan','145 Rue du Maine - Nantes');
echo $client->getPersonne();
$client->setAdresse('23 Avenue Foch - Lyon');
echo $client->getPersonne();


?>