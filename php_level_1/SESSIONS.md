# Les Sessions en PHP

## Qu'est-ce qu'une Session ?

Lorsque vous initialiser une session, le serveur envoi au client un Cookie (via un header HTTP).

Ce cookie, ressemble à ça par défaut:
```
PHPSESSID=SuperLongTokenDidentification
```

Il faut bien noté, qu'à chaque requête HTTP (envoyée du navigateur au serveur) les cookies sont envoyés.

Cela veut dire que le client est maintenant identifiable par le serveur (on sait que le token est unique et donc on peut identifier QUI nous a envoyer la requête).

## Comment utiliser les sessions en PHP ?

Pour utiliser les Sessions, il vous est demandé de lancer une fonction en début de script

```php
<?php
session_start();
?>
```

Cette fonction doit toujours se trouver en tout début de script.
(Souvent dans un fichier qu'on inclura dans nos scripts, vous verrez quand on passera au chapitre des `include` et `require`)

## Une fois initialisée, comment y accéder ?

Notez bien que chaque session est INDIVIDUELLE, chaque utilisateur possède sa propre session.

Vous allez pouvoir y attacher des données via la variable `$_SESSION` qui est par défaut un tableau associatif vide.
