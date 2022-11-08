# HTTP ?

PHP servant principalement à générer des documents HTML, il est très pratique pour répondre à une requête HTTP avec des données dynamiques.


## La requête HTTP

1. Du Navigateur Internet au Serveur Web (Serveur HTTP)

```
# On execute la commande 'curl' qui crée une requête HTTP hors navigateur internet, cela permet de voir ce qu'il se passe exactement.
$ curl -v http://localhost:12001

> GET / HTTP/1.1
> Host: localhost:12001
> User-Agent: curl/7.54.0
> Accept: */*
>
```

Sur les lignes contenant un `>`, on constate :
- la première ligne contenant `GET / HTTP/1.1`
Ceci, comme le reste dans cette exemple fait partie de l'en-tête de requête HTTP
Cette ligne contient la méthode `GET`, le chemin (url) `/` ainsi que le protocol et la version `HTTP/1.1`

Pour les 3 autres lignes, on constatera un format `clé: valeur`
- `Host` = `localhost:12001` (cela correspond au 'nom de domaine' cela permet d'avoir plusieurs sites internet sur la même machine, en séparant le requêtes selons l'Host)
- `User-Agent` = `curl/7.54.0` (le User-Agent permet d'identifier votre navigateur internet, ici il est court et simple nom/version. Celui de Chrome et Firefox sont plus long, à découvrir)
- `Accept` = `*/*` (cette partie de l'en-tête signifie que nous acceptons tout-type de réponse, dans n'importe quel format)

## La réponse HTTP

Exemple de réponse HTTP, suivant la dernière requête à notre serveur

```
< HTTP/1.1 200 OK
< Host: localhost:12001
< Date: Mon, 07 Feb 2022 06:19:55 +0000
< Connection: close
< Content-Type: text/html; charset=UTF-8
< Content-Length: 4874
<
<!DOCTYPE html>
<html>
<head>...</head>
<body>...</body>
</html>
```

Explications des différentes lignes:
Comme pour la requête cela commence par un en-tête:

`HTTP/1.1 200 OK` -> signifie que l'on répond à la requête avec le même protocol et version annoncée précédemment, avec comme info `200 OK`
`200` est le statut de la requête et signifie que tout est OK.
`404` signifie que le serveur n'a pas trouver le document à fournir en réponse.
- `Connection` = `close`, signifie qu'aprés la fin de la réponse, la connexion entre le client et le serveur s'arrête.
- `Content-Type` = `text/html; charset=UTF-8`, le serveur déclare le type de contenu qui va être envoyé en réponse, ainsi que son format, son encodage.
- `Content-Length` = `4874`, la taille du contenu.

Et ensuite le `contenu`, commençant par `<!DOCTYPE>` et se terminant par `</html>` dans notre cas

