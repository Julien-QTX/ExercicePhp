<?php

// on require db.php pour accéder a la variable $db qui contient la connexion à notre DB
require_once 'db.php';

// ici, ":id" est une future variable qui sera injectée au moment de l'executer
$sql = 'SELECT * FROM users WHERE id = :id';

// on prepare le requete
$query = $db->prepare($sql);

// on l'execute en injectant nos variables
$query->execute([
	':id' => 1,
]);

// on recupere les données de la requete, sous forme de tableau associatif
$data = $query->fetch(PDO::FETCH_ASSOC);

var_dump($data);
