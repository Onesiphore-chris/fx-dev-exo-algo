<?php
/*
        Créer une variable nommé fixe qui aura une valeur entière prédéfinie.
        Le script devra permettre à l'utilisateur de saisir un nombre.
        - Tant que le nombre saisis par l'utilisateur est inférieur à la valeur de la variable fixe, afficher le message "Vous avez entré Y. La valeur recherchée est plus grande". 
        - Tant que le nombre saisis par l'utilisateur est supérieur à la valeur de la variable fixe, afficher le message "Vous avez entré Y. La valeur recherchée est plus petite". 
        Si le nombre saisis par l'utilisateur est égale à la valeur de la variable fixe, afficher le message "Félicitations vous avez trouvé le nombre mystère qui est : X".
        Avec Y représentant la valeur entrée par l'utilisateur et X représentant la valeur de la variable fixe.
     */
    $fixe = 40;
    while(true){
        $nombre = readline("Devinez le nombre mystère : ");
        if($nombre<$fixe){
            echo "Vous avez entré ".$nombre.". La valeur recherchée est plus grande.\n";
        }
        elseif($nombre>$fixe){
            echo "Vous avez entré ".$nombre.". La valeur recherchée est plus petite.\n";
        }
        else{
            echo "Félicitations vous avez trouvé le nombre mystère qui est : ".$fixe.".";
            break;
        }
    }
?>