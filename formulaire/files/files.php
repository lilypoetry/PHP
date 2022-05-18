<?php

/**
 * Upload d'un fichier, tableau à 2 dimensions
 * 1 tableau fichier, 2 tableau des infos
 * dossier "fichiers" est créé pour réceptioner le téléchargement
 * jamais upload sans vérification
 * 
 * https://www.php.net/manual/en/reserved.variables.files.php
 * 
 * 1024 Ko = 1Mo
 */

 echo '<pre>';
 print_r($_FILES);
 echo '</pre>';

// Vérification 


// Pour télécharger le fichier du client au serveur, upload unique fichier
move_uploaded_file($_FILES['fichier']['tmp_name'], "fichiers/{$_FILES['fichier']['name']}");


