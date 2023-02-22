# Composer
les premieres choses à faire 
- Composer init 
- Mise à jour du nom de famille dans le composer.json (App) de nos classes (changer le nom de famille par App\\)
- Composer du -o pour mettre à jour le fichier composer.json qu'on viens de modifier 

# Gitignore
- On ignore le vendor avec les commandes suivantes :
git add .
git commit -m ""
git push -u origin main

# Localhost
- On démarre le serveur Localhost avce la commande suivantes :
php -S localhost:8000 -d display_errors=1 -t public
ou essayer avec le port 5000 si cela ne fonctionne pas 

# .htaccess
- On reprogramme le serveur apash (afin de protéger contre les fails de sécurité)
- 1 Mise en place du .htaccess a la racine du projet 
- 2 Mise en place du .htaccess dans le dossier public 

# filp/whoops
- On installe une petite dependense pour avoir des messages d'erreur un peu plus stylés, et permettre un debeug plus facilement voir site https://github.com/filp/whoops voici la commande :
composer require filp/whoops --dev

# dotenv
- On installe vlucas/phpdotenv pour mettre en place les variables d'environnement (stoker des données sensibles de notre application) voir site https://packagist.org/?query=dotenv voici la commande :
composer require vlucas/phpdotenv

# VarDumper
- On installe le paquet VarDumper pour afficher les erreur d'une bonne maniere sans le "<pre>" voir le site https://symfony.com/doc/current/components/var_dumper.html voici la commande :
composer require --dev symfony/var-dumper

# HttpFoundation
- On installe le paquet pour ***** voir le site https://symfony.com/doc/current/components/http_foundation.html voici la commande :
composer require symfony/http-foundation
