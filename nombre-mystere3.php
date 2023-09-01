<?php
    /*
        Créer une variable nommée `fixe` qui aura pour valeur `rand(0,10)`.
        Créer une variable nommée `tentative` qui aura pour valeur 0.
        Le script devra permettre à l'utilisateur de saisir un nombre.
        - Tant que le nombre saisis par l'utilisateur est inférieur à la valeur de la variable fixe, afficher le message "Vous avez entré Y. La valeur recherchée est plus grande". 
        - Tant que le nombre saisis par l'utilisateur est supérieur à la valeur de la variable fixe, afficher le message "Vous avez entré Y. La valeur recherchée est plus petite".
        Pour toutes réponses incorrectes de la part de l'utilisateur, la variable `tentative` devra être incrémentée de 1. 
        Si le nombre saisis par l'utilisateur est égale à la valeur de la variable fixe, afficher le message "Félicitations vous avez trouvé le nombre mystère qui est : X en Z tentative(s).".
        Avec Y représentant la valeur entrée par l'utilisateur, X représentant la valeur de la variable `fixe` et Z représentant le nombre de tentative effectuée.
    */

    $fixe = rand(0,10);
    $tentative = 0;

    while(true){
        $tentative++;
        $nombre = readline("Devinez le nombre mystère : > ");
        if($nombre<$fixe){
            echo "Vous avez entré ".$nombre.". La valeur recherchée est plus grande.\n";
        }
        elseif($nombre>$fixe){
            echo "Vous avez entré ".$nombre.". La valeur recherchée est plus petite.\n";
        }
        else{
            echo "Félicitations vous avez trouvé le nombre mystère qui est : ".$fixe." en ".$tentative." tentative(s).";
            break;
        }
    }
    ?>