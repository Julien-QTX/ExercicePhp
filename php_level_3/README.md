# Level 3 - Session

1. Reprendre les fichiers du niveau 2.

2. Ajoutez-y un dossier www/`actions`

3. Gérez le formulaire de `Login` via un fichier `www/actions/login.php`

4. Vérifiez si l'utilisateur / mot de passe sont valides

5. Créez une `$_SESSION['user'] = username` si les identifiants sont valides.
5. (bis) Créez une variable de session `$_SESSION['id'] = user_id` si les identifiants sont valides.

6. Afficher un bouton `Se déconnecter` dans la navbar/menu (UNIQUEMENT visible si l'utilisateur est connecté)

7. Vous allez avoir besoin d'un fichier supplémentaire pour gérer ce bouton/lien.

(Nous n'avons pas encore de connexion à une base de données, je vous conseille de créer un tableau associatif en dur dans un fichier .php qui contiendra le/les utilisateurs)


# Fonctions utiles pour sécuriser un mot de passe

```
hash
password_hash
```
