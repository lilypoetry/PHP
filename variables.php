<?php

echo 'Nous alons voir les variables !';

/**
 * Variables
 * 
 * Pas de caractères spéciaux hormis les underscore (_)
 * et ne commence JAMAIS par un chiffre !!!
 */
 $brouette = 'Je suis une valeur de variables'; // Type "string"
 $nombre = 123; // Type "int"
 $boolean = true; // Type "bool"
 $null = null; // Type "null"
 $chaine_de_caractere = 'Blabla';

 // Affiche la valeur d'une variable
 echo '<p>' .$nombre. '</p>'; 
 echo "<p>$nombre</p>"; // Concatène la chaîne
 echo '<p>$nombre</p>'; // Ne concatène pas la chaîne