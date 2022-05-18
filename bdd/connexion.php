<?php

/**
 * Connexion à la base de données
 */

 // const sans $ ecrire un majuscule
 // Localisation de la BDD (basse de données)
 const DB_HOST = 'localhost';

 // Nom d'utilisateur
 const DB_USER = 'root';

 // Mot de passe
 const DB_PASS = '';

 // Nom de la BDD
 const DB_NAME = 'exercice_1';

 // PDO = PHP Data Objects est une class
 $db = new PDO(
    'mysql:host='. DB_HOST .';dbname=' . DB_NAME, // 1er argument pour la connexion
    DB_USER,    // 2emèe argument user
    DB_PASS, // 3emè argument mot de passe
    [
        // Gestion des erreurs
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,

        // Gestion du jeu de caractères
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',

        // Choix des retours des résultats
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
);