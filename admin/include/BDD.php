<?php
    /* Connexion à la Base de Données. */
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=novus_infosup;charset=utf8', 'root', 'root');
    }
    catch(Exception $e)
    {
        die('Erreur :'.$e->getMessage());
    }
?>