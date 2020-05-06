<?php
    if (isset($_COOKIE))
    {
        setcookie('pseudo', time() +365*24*3600, null, null, false, true);
    }

    include ('./templates/base.php');
    include ('./templates/nav.php');
?>

<?php 
//Ce connecter à la base de données
//préparation de la req pour afficher les données voulus
//Afficher les 10 derniers messages dans la base de données. du plus ancien au plus récent
    //Vérifier les characètres spéciaux à afficher

    //On ajoute le fichier config.php pour ce connecter à la bdd
    include('config.php');

    //récupération des 10 derniers messages
    $reponse = $bdd->query('SELECT pseudo, messages FROM utilisateurs ORDER BY ID DESC LIMIT 10');

    //affichage des 10 derniers messages
    while ($donnees = $reponse->fetch())
    {
        ?>
        <div class="container">
        
        <?php
            echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['messages']) . '</p>';
        ?>
        
        </div>
    <?php
    }

    $reponse->closeCursor();


?>

<div class="container-fluid ml-auto">
    <form action="./minichat_post.php" method="POST">

        <label>Votre pseudo :
            <input type="text" name="pseudo" placeholder="Votre pseudo" value="<?php echo $_COOKIE['pseudo']; ?>" />
        </label>

        <label>Votre message :
            <input type="text" name="messages" placeholder="Votre message">
        </label>

        <input type="submit" value="Envoyer" />
    </form>

    <a href="./index.php" class="btn btn-primary">Rafraichir la page</a>
</div>