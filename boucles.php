<?php

/**
 * Boucle
 */
$prenom = 'Gila';
$client = [
    'prenom' => $prenom,
    'nom' => 'BROWN',
    'age' => 43,
    'newsletter' => false
];

$clients = [
    ['id' => 1, 'nom' => 'STONE', 'prenom' => 'Moni'],
    ['id' => 2, 'nom' => 'ANDI', 'prenom' => 'Corine']
];


// while...
$index = 0;
echo '<ul>';
while($index <= 10) {
    echo "<li>$index</li>";
    $index++;
}
echo '</ul>';

// do... while (elle verifie avant de le faire)
$i = 0;
do {
    echo "<p>$i</p>";
    $i++;
} while($i <= 10);

// for
$phrase = null;
for ($index = 0; $index <= 5; $index++) {
    // Concatène l'index à la variable $phrase
    $phrase .= $index;
    // si l'index est inférieur à 5...
    if ($index < 5) {
        // On concatène une virgule
        $phrase .= ', ';
    }    
}
echo $phrase;
echo '<hr>';


$numeros = [12, 5, 67, 43, 6, 3, 45, 0];

for ($i = 0; $i < count($numeros); $i++) {
    echo $numeros[$i] .', ';
}
echo '<hr>';

// foreach..
foreach($numeros as $index => $value) {
    echo "$index: $value - ";
}

foreach($clients as $client) {
    echo "<p>{$client['nom']}, {$client['prenom']} </p>";
}

