<!-- Se fichier permet d'initialiser (a pas confondre avec boostrap css) -->
<?php

// On importe avec le use
use Whoops\Run;
use Dotenv\Dotenv;
use Whoops\Handler\PrettyPageHandler;

/**
 * --------------------------------------------------
 * Hello!
 * 
 * Voici le fichier de configuration permettant 
 * d'amorcer l'application.
 * 
 * --------------------------------------------------
 */

 // Chargement de l'autoloader de composer 
 require __DIR__ . "/../vendor/autoload.php";

 // Chargement des constantes representant des raccourcis
 // Qui permet de revenir a la racine
 require __DIR__ . "/constants/app.php";

 // Chargement de Whoops pour avoir des messages d'erreur un peu plus stylés
 // et permettre un debeug plus facilement 
 // voir site https://github.com/filp/whoops
$whoops = new Run;
$whoops->pushHandler(new PrettyPageHandler);
$whoops->register();

// Chargement des variables d'environnement 
$dotenv = Dotenv::createImmutable(ROOT);
$dotenv->load();

// Chargement des conteneur de dépendances