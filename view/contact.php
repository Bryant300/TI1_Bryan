<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/lightbox.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= ucfirst("Contact") ?> </title>
</head>
<body>
    

  <?php include ROOT_PATH."/view/inc/header.php" ?>
<div class="wrapper">
 <?php include ROOT_PATH."/view/inc/menu.php"?>
<div class="contenu-page">

    <h2 class="titre-page">Pour nous contacter</h2>

    <div class="img-centree">
        <img src="img/contacts.jpg" alt="Nous contacter">
    </div>

    <form action="#" method="post" class="formulaire">

        <div class="form-ligne">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" placeholder="Votre nom">
        </div>

        <div class="form-ligne">
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" placeholder="Votre prénom">
        </div>

        <div class="form-ligne">
            <label for="email">E-mail :</label>
            <input type="email" id="email" name="email" placeholder="votre@email.com">
        </div>

        <div class="form-ligne">
            <label for="sujet">Sujet :</label>
            <input type="text" id="sujet" name="sujet" placeholder="Sujet de votre message">
        </div>

        <div class="form-ligne">
            <label for="message">Message :</label>
            <textarea id="message" name="message" placeholder="Votre message..."></textarea>
        </div>

        <div class="form-bouton">
            <button type="submit">Envoyer le message</button>
        </div>

    </form>
</div>
</div>
    <script src="js/lightbox-plus-jquery.js"></script>
</body>
