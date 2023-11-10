# MVC en PHP

Voici un mini framework en MVC (avec la POO PHP). On a utilisé Composer pour installer des librairies. La première commande à faire si vous utilisez ce framework c'est :

```
composer install
```

## Les contrôleurs

Les contrôleurs sont rangés dans `src/Controller`. Un contrôleur sert à ranger son code PHP (uniquement le PHP). Une page = Une méthode dans un contrôleur.

Le contrôleur va souvent renvoyer une vue (uniquement le HTML).

Pour aller sur le site, on va bien sur le fichier `public/index.php`.

## Lancer un serveur de dev

On a une commande qui permet de lancer un serveur :

```
php -S 127.0.0.1:8000 -t public
```

On pourra maintenant aller sur `http://localhost:8000`.
