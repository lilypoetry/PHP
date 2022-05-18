<?php

/**
 * Les opérateurs
 */

 /**
  * Calculs
  */
 $one = 10;
 $two = 20;

var_dump($one + $two);
var_dump($one - $two);
var_dump($one * $two);
var_dump($one / $two);
var_dump($one % $two);
var_dump($one ** $two); // Puissance

/**
 * Incrémentation & décrémentation
 */

 // Post-incrémentation
var_dump($one++, $one);

// Post-décrémentation
var_dump($two--, $two);

// Pre-incrémentation
var_dump(++$one);

// Pre-decrémentation
var_dump(--$two);

/**
 * Comparaison
 */

 // Egal à...
var_dump($one == $two);

// Strictement égal à...
var_dump($one === $two);

// Différent de...
var_dump($one != $two);

// Strictement différent de...
var_dump($one !== $two);

// Supérieur à...
var_dump($one > $two);

// Supérieur ou égal à...
var_dump($one >= $two);

// Inférieur à...
var_dump($one < $two);

// Inférieur ou égal à...
var_dump($one <= $two);

/**
 * Logique
 */

// Condition OU condition
var_dump($one === $two || $one < $two);

// Condition ET condition
var_dump($one === $two && $one < $two);

// Opérateur de logique invérsé (non logique)
var_dump(!false);

/**
 * Coalescence nulle
 */
$var = null;
$autreVariable = 12;

$resultat = $var ?? 'Je suis récupéré';
var_dump($resultat);

$resultat = $autreVariable ?? 56;
var_dump($resultat);
