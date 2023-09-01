<?php
    /*
        Ecrire un script qui permettra l'affichage de la table de multiplication d'un nombre saisi par l'utilisateur. La multiplication commencera par 1 et s'arrêtera à 12.
        Ex: Si l'utilisateur entre 3, on aura:
        3 x 1 = 3;
        3 x 2 = 6;
        3 x 3 = 9;
        ...
        3 x 12 = 36;
    */
    $nombre = readline("Entrer le nombre dont vous voulez la multiplication : ");
    echo "TABLE DE MULTIPLICATION DE ".$nombre."\n";
    
    for ($i=1; $i <=12 ; $i++) { 
        echo $nombre." x ".$i." = ".$nombre*$i.";\n";
    }
?>