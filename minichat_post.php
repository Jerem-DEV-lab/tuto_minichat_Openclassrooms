<?php
// Ce connecter à la bdd 
// préparer une requete sql pour stocker les informations dans la bdd
// on execute la requete sql pour stocker les informations dans la bdd définitivement.
// on termine la connexion à la bdd


if (isset($_POST['pseudo']) AND ($_POST['messages']))
{
    include('./config.php');
}
//variable récupération des champs

$pseudo = $_POST['pseudo'];
$messages = $_POST['messages'];
//on prépare la requête sql
$req = $bdd->prepare('INSERT INTO utilisateurs (pseudo, messages) VALUES(?,?)');
//on execute la requete sql
$req->execute(array($_POST['pseudo'], $_POST['messages']));
//on termine la connexion à la bdd
$req->closeCursor();


// Pour la partie front
// On ce connecte à la bdd
// on prépare la req sql pour afficher les informations de la bdd


// Effectuer ici la requête qui insère le message
// Puis rediriger vers minichat.php comme ceci :
header('Location: index.php');
?>