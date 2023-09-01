<?php
    /*
        Le script devra permettre à l'utilisateur de saisir un nombre.
        Si le nombre saisis par l'utilisateur est un multiple de 3, afficher le message "Le nombre X est multiple de 3". Sinon afficher le message "Le nombre X n'est pas un multiple de 3" avec X représentant la valeur entrée par l'utilisateur.
    */
    $nombre = readline("Entrer un nombre : ");

    if($nombre % 3 == 0)
    {
        echo 'Le nombre '.$nombre.' est multiple de 3.';
    }
    else
    {
        echo 'Le nombre '.$nombre.' n\'est pas un multiple de 3.';
    }
    ?>