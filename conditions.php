<?php

/**
 * Les conditions
 * 
 * if (condition) { ... }
 * if (condition) { ... } else { ... }
 * if (condition) { ... } elseif (condition) { ... } else { ... }
 */

 // if (condition) { ... }
 $nombre = 100;
 if ($nombre !== 12) {
    echo 'Il est différent de 12';
 }

// if (condition) { ... } else { ... }
if ($nombre === 12) {
    echo 'Il est différent de 12';
 }
 else {
     echo 'Il ne vaut pas 12';
 }

// if (condition) { ... } elseif (condition) { ... } else { ... }
if ($nombre < 200) {
    echo '<p>Il est inférieur à 200</p>';    
}
elseif ($nombre === 200) {
    echo 'Il est strictement égal à 100 ! Bravo !';  
}
else {
    echo 'Rien ne va...';
}

/**
 * Switch
 * Vérifie seulement l'égalité d'une variable à une valeur
 */
$prenom = 'Cinta';

switch($prenom) {
    case 'Juliette':
        echo "Hello $prenom !";
        break; // Arrête le switch
    case 'Anette':
        echo "Bonjour $prenom !";
        break; // Arrête le switch    
    case 'Cantik':
        echo "Salut $prenom !";
        break; // Arrête le switch    
    default:
        echo 'Tu\' es qui ? Wesh';
}
