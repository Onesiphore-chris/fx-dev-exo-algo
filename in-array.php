<?php
    $count = 0;
    $find = False;
    $array = [rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100)];

    while ($count<3) { 
        $search = readline('Valeur rechercher : ');

        if(in_array($search, $array)){
            echo '> '.$search.' < est présent dans le tableau';
            $find = True;
            break;
        }else{
            echo $search.' n\'est pas dans le tableau';
            echo "\n";
        }
        $count++;
    }

    if($count>=3 && !$find){
        echo "Désolé, vous n'avez pas pu déviner\n";
        for ($i=0; $i < count($array); $i++) { 
            echo ' < '.$array[$i].' > ';
        }
    }
?>