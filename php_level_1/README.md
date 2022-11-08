#  Niveau 1

Comprendre comment lire les informations reçues du client.
Gérer les formulaires et les paramètres d'URL

## Comment lancer un serveur web avec PHP

Un serveur web est fourni avec PHP, pour le lancer suivez les instructions suivantes:

```
cd le/dossier/souhaité

php -S 127.0.0.1:12001
```

Cela lancera un serveur web dans le dossier actuel, vous pourrez y accéder de puis l'URL suivante:
http://127.0.0.1:12001/

Si un fichier index.php se trouve dans votre dossier, il sera disponible en "page d'accueil"

Sinon vous devrez taper le nom du fichier dans l'URL http://127.0.0.1:12001/fichier.php


##  PHP et les variables super globales

PHP nous met à disposition plusieurs variables super globale, permettant de récupérer des informations sur la requête envoyée depuis le navigateur.

> Pour rappel: le PHP tourne coté serveur.

### La variable $_GET

`$_GET` est un tableau associatif contenant les différents paramètres contenus dans l'URL

Exemple :
je me rend sur http://127.0.0.1/mapage.php?var1=value1&var2=value2&var3=value3
```php
<?php
var_dump($_GET);
/*
echo $_GET['var1']; // value 1
echo $_GET['var2']; // value 2
echo $_GET['var3']; // value 3
*/
?>
```

## Les formulaires en HTML

Les formulaires, en HTML sont interprété par le navigateur pour envoyés les informations contenues dans celui-ci au serveur web.

```html
<form action="traitement_formulaire.php">
	Nom : <input type="text" name="lastname"><br />
	Prenom : <input type="text" name="firstname"><br />
</form>
```

L'attribut `action` définie sur la balise `<form>` permet de définir sur quelle page sera envoyée le formulaire (et les informations contenues dans les `input`)

L'attribut `method` permet de choisir entre un envoi dans les paramètres d'URL de la page de traitement (`GET`)
ou d'envoyer les informations dans le `body` de la requête HTTP (`POST`)

Exemple :
```html
<form action="traitement_formulaire.php" method="POST">
	Nom : <input type="text" name="lastname"><br />
	Prenom : <input type="text" name="firstname"><br />
</form>
```

avec la méthode POST, la page traitement_formulaire.php récuperera les informations avec la variable `$_POST`

`$_POST` est également un tableau associatif (comme `$_GET`)

```php
<?php
var_dump($_POST);
?>
```
