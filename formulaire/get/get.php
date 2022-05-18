<?php

/**
 * Réceptionner les données en GET
 */


/**
 * Les formulaires et les superglobales
 * 
 * $_GET  
 * Toujours précédé d'un underscrore et en majuscule
 * parciculairement avec un formulaire
 * capable de transporter des infos dans une page à une autre (pas 2 pages ou plus)
 * un utilisant url de la page. Pour moteur de recherche 
 */

 echo '<pre>';
 print_r($_GET);
 echo '</pre>';

if (isset($_GET['prenom'])) {
    echo $_GET['prenom'];
}
 

