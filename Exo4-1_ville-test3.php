<?php 

    require 'Exo4-1_ville-test3.class.php';

        //création des objets
        $ville1 = new ville('Nantes', 'Loire Atlantique');
        
        $ville2 = new ville('Lyon','Rhône');
    
        echo $ville1->getinfo();
        echo $ville2->getinfo();

?>