<?php

// Import
use App\Kernel;

/**
 * ----------------------------------------------------
 * Bienvenue dans notre framework
 * 
 * Ce fichier représente le contrôleur frontal.
 * 
 * Ses rôles : 
 *   - Amorcer l'application
 *   - Créér une nouvelle instance de noyau
 *   - Demander au noyaude soumettre la requête 
 *     et de récupérer la réponse correspondante
 *   - Envoyer cette réponse au client
 * 
 * ----------------------------------------------------
 *  */ 

 // Amorçage de l'application (Charger toute les dépendence)
 require __DIR__ . "/../config/bootstrap.php";


 // Création d'une nouvelle instance de noyau de l'application
$kernel = new Kernel();

 // Demander au noyaude soumettre la requête et de récupérer la réponse correspondante
$response = $kernel->handleRequest();

 // Envoyer cette réponse au client
 $response->send();