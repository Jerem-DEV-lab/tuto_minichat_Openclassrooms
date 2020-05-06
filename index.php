<?php
    include ('./templates/base.php');
    include ('./templates/nav.php');
?>

<form action="./minichat_post.php" method="POST">

    <label>Votre pseudo :
        <input type="text" name="pseudo" placeholder="Votre pseudo" />
    </label>

    <label>Votre message :
        <input type="text" name="messages" placeholder="Votre message">
    </label>

    <input type="submit" value="Envoyer" />
</form>

