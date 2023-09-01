<?php
    /*
        Améliorer l'exercice précédant(nombre mystère 3) en limitant le nombre de tentatives à 3.
        Si après 3 tentaives, l'utilisateur n'a pas trouvé le bon nombre, afficher le message "xx Désolé, après 3 tentatives vous n'avez pas réussi. Le nombre à deviner était X".
        Avec X représentant la valeur de la variable fixe.
    */

    $fixe = rand(0,10);
    $tentative = 0;

    while($tentative<3){
        $tentative++;
        $nombre = readline("Devinez le nombre mystère : > ");
        if($nombre<$fixe){
            echo ">> Vous avez entré ".$nombre.". La valeur recherchée est plus grande.\n";
        }
        elseif($nombre>$fixe){
            echo ">> Vous avez entré ".$nombre.". La valeur recherchée est plus petite.\n";
        }
        else{
            echo ">>> Félicitations vous avez trouvé le nombre mystère qui est : ".$fixe." en ".$tentative." tentative(s).";
            break;
        }
    }

    if($tentative>=3 && $nombre!==$fixe){
        echo "xx Désolé, après 3 tentatives vous n'avez pas réussi. Le nombre à deviner était ".$fixe;
    }
    ?>