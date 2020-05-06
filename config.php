<?php

try
    {
        //on ce connecte à MySql
        $bdd = new PDO('mysql:host=localhost;port=3308;dbname=minichat', 'root', '');
        
    }
    catch(Exception $e)
    {
        //En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
    }
?>