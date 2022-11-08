<?php

// Écrivez un bloc `if` qui affiche dans la console :
// - "accès autorisé" si `$cle_batiment` vaut `1` et que `$places_disponibles` vaut `1`
// - "accès non autorisé" dans tous les autres cas

$cle_batiment = rand(0, 1);
$places_disponibles = rand(0, 1);

if($cle_batiment == 1 && $places_disponibles == 1){
    echo "accès autorisé";
}
else{
    echo "accès non autorisé";
}

?>
<br>
<?php

echo "cle_batiment = $cle_batiment";
echo PHP_EOL;
echo "places_disponibles = $places_disponibles";
echo PHP_EOL;


