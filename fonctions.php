<?php

/**
 * Les fonctions PHP
 */

function nomDeLaFonction($prenom, $nom = null) {
    echo "<p>Hello $prenom $nom !</p>";
}

/**
 * Une fonction doit être appelée après que celle-ci
 * ait été créée
 */
nomDeLaFonction('Cantik', 'Pelangi');
nomDeLaFonction('Ratu');
nomDeLaFonction('Sempurna', 'Tanpa batas');

// Donne un type dans le fonction 'array' (attent un tableau)
// ?string, le type ne pas obligatoire
// function beaucoupInfos(array $utilisateur, ?string $metier = null){
// string | int (type string ou int)
// function beaucoupInfos(array $utilisateur, string|null $metier = null){

function beaucoupInfos(array $utilisateur, string $metier = null): ?int{
    var_dump($metier);
    // print_r($utilisateur);
    return $utilisateur['age'];
    echo 'Je suis après le return, mais je ne fonctionne pas';
}

$array = [
    'prenom' => 'Bidadari',
    'age' => 17,
    'ville' => 'Langit'
];

$age = beaucoupInfos($array, 'Tuhan');
echo $age;