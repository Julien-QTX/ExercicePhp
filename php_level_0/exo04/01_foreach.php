<?php

// Copiez-collez le tableau que vous avez écrit dans l'exercice 2.01) des tableaux simples (`exo-2/01_associatifs.php`)
// Écrivez le code d'une boucle `foreach` qui affiche dans la console toutes les valeurs du tableau
// Dans le format suivant : `clé = valeur (saut de ligne)`

$tab1 = array('1' => "C/'est le chiffre 1" , '2' => "C/'est le chiffre 2", '3' => "C/'est le chiffre 3");

foreach{
    echo $tab1
}


foreach ($arr as $key => $value) {
    // $arr[3] sera mis à jour avec chaque valeur de $arr...
    echo "{$key} => {$value} ";
    print_r($arr);
}