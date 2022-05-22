<?php
    //connexion à la base de données
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=fil_rouge;charset=utf8', 'root','');
    }catch(Exception $e)
    {
        die('Erreur'.$e->getMessage());
    }
?>