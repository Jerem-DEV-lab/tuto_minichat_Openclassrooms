<?php
// Effectuer ici la requête qui insère le message
// Puis rediriger vers minichat.php comme ceci :
header('Location: index.php');
// Ce connecter à la bdd 
// préparer une requete sql pour stocker les informations dans la bdd
// 

if (isset($_POST['pseudo']) AND ($_POST['password']))
{
    try
    {
        //on ce connecte à MySql
        $bdd = new PDO('mysql:host=localhost;PORT=3308;dbname=tp_minichat', 'root', '');
    }
    catch(Exception $e)
    {
        //En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
    }
}


//Pour la partie front
// On ce connecte à la bdd
// on prépare la req sql pour afficher les informations de la bdd

?>