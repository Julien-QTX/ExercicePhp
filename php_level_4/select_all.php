<?php

// on require db.php pour accéder a la variable $db qui contient la connexion à notre DB
require_once 'db.php';

// ici, ":id" est une future variable qui sera injectée au moment de l'executer
$sql = 'SELECT * FROM users';

// on prepare le requete
$query = $db->prepare($sql);

// on l'execute en injectant nos variables
$query->execute([]);

// on recupere les données de la requete, sous forme de tableau associatif: [ [user], [user] ]
$data = $query->fetchAll(PDO::FETCH_ASSOC);

// exemple fetch one jusqu'a qu'il n'y ai plus rien a fetch
// while (($data = $query->fetch(PDO::FETCH_ASSOC))) {
//   var_dump($data);
// }

// var_dump($data);









/*
array(2) {
  [0]=>
  object(User)#3 (4) {
    ["email"]=>
    string(14) "test@ttest.com"
    ["pseudo"]=>
    string(4) "Test"
    ["password"]=>
    string(8) "password"
    ["id"]=>
    string(1) "1"
  }
  [1]=>
  object(User)#4 (4) {
    ["email"]=>
    string(11) "test@gg.com"
    ["pseudo"]=>
    string(2) "GG"
    ["password"]=>
    string(4) "test"
    ["id"]=>
    string(1) "2"
  }
}
*/
