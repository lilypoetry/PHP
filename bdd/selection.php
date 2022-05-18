<?php

/**
 * Sélection de données en BDD
 */

// Connextion à la BDD avant de créer qoi que ce soit
require_once 'connexion.php';

// query()
// Exécute directement la requête SQL passée en paramètre
$query = $db->query('SELECT * FROM etudiants');

/** fetchAll() retourne TOUS les résultats trouvés par la requ^te SQL
  * ci-dessus
  */ 
// $etudiants = $query->fetchAll();


/** Une boucle est nécessaire pour lire les résultats retournés 
  * par fetchAll()
  */
// foreach($etudiants as $etudiant) {
//    echo " <p>L'étudiant se nomme {$etudiant['prenom']} , {$etudiant['nom']} </p>";
// }


/**
 * fetch()
 * Récupère UN SEUL résultat et le premier trouvé par la requête SQL
 * Aucune boucle n'est nécessaire à sa lecture.
 */
$etudiant = $query->fetch();
echo " <p>L'étudiant se nomme {$etudiant['prenom']} , {$etudiant['nom']} </p>";
/* echo '<pre>';
print_r($etudiants);
echo '</pre>'; */

/**
 * prepare()
 * Il n'execute pas la requête SQL directement contrairement à query().
 * On utilise prepare() si on passe des données dans la requête SQL,
 * les données de l'exterieurs
 */

$prenom = 'Jean';

// on ajoute des arguments nommés ():firstName) qui seront remplacés par des valeurs
$query = $db->prepare('SELECT * FROM etudiants WHERE prenom = :firstName'); 

/**
 *  bindValue() recherche dans la requ^te SQL, l'argument nommé passé en
 * paramètre et le remplace par la valeur fournie
 */  
$query->bindValue(':firstName', $prenom); // lire la valeur évaluée qu'au moment de l'appel à la fonction
// $query->bindParam(':firstName', $prenom); lire la valeur

/**
 * On exécute la requête
 */
$query->execute(); 

$etudiants = $query->fetchAll();

echo '<pre>';
print_r($etudiants);
echo '</pre>';