<?php
    /*
        Créer une variable nommé fixe qui aura une valeur entière prédéfinie.
        Le script devra permettre à l'utilisateur de saisir un nombre.
        Si le nombre saisis par l'utilisateur est inférieur à la valeur de la variable fixe, afficher le message "Vous avez entré Y. La valeur recherchée est plus grande". 
        Si le nombre saisis par l'utilisateur est supérieur à la valeur de la variable fixe, afficher le message "Vous avez entré Y. La valeur recherchée est plus petite". 
        Si le nombre saisis par l'utilisateur est égale à la valeur de la variable fixe, afficher le message "Vous avez entré Y. Félicitations vous avez trouvé le nombre mystère qui est : X".
        Avec Y représentant la valeur entrée par l'utilisateur et X représentant la valeur de la variable fixe.
    */
    $fixe = 23;
    $nombre = readline("Quel est le nombre mystère : ");

    if($nombre<$fixe)
    {
        echo 'Vous avez entré '.$nombre.'. La valeur recherchée est plus grande.';
    }
    elseif($nombre>$fixe)
    {
        echo 'Vous avez entré '.$nombre.'. La valeur recherchée est plus petite.';
    }
    else
    {
        echo 'Vous avez entré '.$nombre.'. Félicitations vous avez trouvé le nombre mystère qui est : '.$fixe;
    }
    ?>