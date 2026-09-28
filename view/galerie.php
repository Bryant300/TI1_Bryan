<!DOCTYPE html>
<html lang="fr">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/lightbox.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= ucfirst("Galerie") ?> </title>
</head>
<body>
  <?php include ROOT_PATH."/view/inc/header.php" ?>
<div class="wrapper">
 <?php include ROOT_PATH."/view/inc/menu.php"?>

    <div class="contenu-page">

    <h2 class="titre-page">Galerie photographique</h2>
    <div class="galerie-grille">

        <div class="galerie-image">
            <a href="img/1280px-Berlin_reichstag_CP.jpg"
               data-lightbox="galerie"
               data-title="Berlin - Reichstag">
                <img src="img/480px-Berlin_reichstag_CP.jpg"
                     alt="Berlin - Reichstag">
            </a>
            <p>Berlin - Reichstag</p>
        </div>

        <div class="galerie-image">
            <a href="img/1280px-Berlin-Charlottenburg_Theater_des_Westens_05-2014.jpg"
               data-lightbox="galerie"
               data-title="Berlin - Charlottenburg - Theater des Westens">
                <img src="img/480px-Berlin-Charlottenburg_Theater_des_Westens_05-2014.jpg"
                     alt="Berlin - Charlottenburg - Theater des Westens">
            </a>
            <p>Berlin - Charlottenburg - Theater des Westens</p>
        </div>

        <div class="galerie-image">
            <a href="img/1280px-Bode_Musem_Berlin.jpg"
               data-lightbox="galerie"
               data-title="Berlin - Bode Museum">
                <img src="img/480px-Bode_Musem_Berlin.jpg"
                     alt="Berlin - Bode Museum">
            </a>
            <p>Berlin - Bode Museum</p>
        </div>

        <div class="galerie-image">
            <a href="img/1280px-Braniborská_brána.jpg"
               data-lightbox="galerie"
               data-title="Berlin - Landgericht">
                <img src="img/480px-Braniborská_brána.jpg"
                     alt="Berlin - Landgericht">
            </a>
            <p>Berlin - Landgericht</p>
        </div>

        <div class="galerie-image">
            <a href="img/1280px-Dom_Berlin_abends.jpg"
               data-lightbox="galerie"
               data-title="Berlin - Dom">
                <img src="img/480px-Dom_Berlin_abends.jpg"
                     alt="Berlin - Dom">
            </a>
            <p>Berlin - Dom</p>
        </div>

        <div class="galerie-image">
            <a href="img/1280px-Landgericht_Berlin.jpg"
               data-lightbox="galerie"
               data-title="Berlin - Landgericht">
                <img src="img/480px-Landgericht_Berlin.jpg"
                     alt="Berlin - Landgericht">
            </a>
            <p>Berlin - Landgericht</p>
        </div>

    </div>

</div>
</div>
    <script src="js/lightbox-plus-jquery.js"></script>
</body>
</html>