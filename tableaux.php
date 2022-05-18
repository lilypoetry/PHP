<?php

/**
 * Les tableaux
 */

 // Tableau indexé ou numéroté
// $tableau = array();
$tableau = ['Bonjour !', 23, true, 34.5];

echo $tableau[3]; // Extraire le tableau indexe n°3
echo $tableau[0];

echo "<p>$tableau[0] Oksi, tu me dois $tableau[3]</p>";

echo '<pre>';
var_dump($tableau);
echo '</pre>';

// Tableau associatif
$prenom = 'Gila';
$client = [
    'prenom' => $prenom,
    'nom' => 'BROWN',
    'age' => 43
];

echo $client['prenom'];

// Tableau multidimensionnel
$clients = [
    ['id' => 1, 'nom' => 'Bandung', 'prenom' => 'Moni'],
    ['id' => 2, 'nom' => 'ANDI', 'prenom' => 'Corine']
];

echo $clients[1] ['nom'];