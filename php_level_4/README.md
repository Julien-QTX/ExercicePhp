# Level 4 - La connexion à la base de donnée

1. Reprendre les fichiers du niveau 3.

2. Ajoutez un fichier `src/db.php` qui s'occupera de la connexion à la DB

3. Créez une connexion à la BDD, avec PDO.

4. Faire en sorte que le formulaire d'inscription ajoute un utilisateur en DB

5. Pouvoir se connecter avec un utilisateur enregistré en DB

6. Hashez les mots de passe (avec la fonction `hash` ou `password_hash`)

## Installer une BDD sur votre Mac


Plusieurs choix:

- Installez MAMP
- Installer MariaDB avec brew (https://mariadb.com/kb/en/installing-mariadb-on-macos-using-homebrew/)

### Exemple avec brew si vous n'utilisez pas MAMP

Installer mariaDB avec brew
```
brew install mariadb
```

Démarrer le serveur
```
mysql.server start
```
