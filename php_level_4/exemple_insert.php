<?php

require_once 'db.php';

$sql = 'INSERT INTO users(email, pseudo, password) VALUES (:email, :pseudo, :password)';


$query = $db->prepare($sql);
$query->execute([
	':email' => 'email@gg.com',
	':pseudo' => 'LePseudo',
	':password' => 'LePassword'
]);

// on récupère le dernier id inséré dans la db (si besoin...)
$id = $db->lastInsertId();


