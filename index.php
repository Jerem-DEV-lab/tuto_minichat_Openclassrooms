<?php
    include ('./templates/base.php');
    include ('./templates/nav.php');
?>

<form action="./minichat_post.php" method="POST">

    <label for="pseudo">Votre pseudo :
        <input type="text" name="pseudo" placeholder="Votre pseudo" />
    </label>

    <label for="password">Votre mot de passe :
        <input type="password" name="password" placeholder="Votre mot de passe">
    </label>

    <input type="submit" value="Envoyer" />
</form>

<div class="container">
        <p><?php ?></p>

</div>
