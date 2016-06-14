<?php include 'config.php';
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div id="gauche">
    <h2>Liste catégorie:</h2>
    <ul>
        <?php
        include 'affiche_cat.php';
        ?>
    </ul>
    <h3>Ajouter catégorie:</h3>
    <?php
    include 'formulaire_cat.php';
    ?>
</div>
<div id="milieu">
    <h2>Tâches:</h2>
    <ul>
        <?php include 'affich_tache.php' ?>
    </ul>
</div>

<div id="droite">
  
    <?php
    include 'formulaire_tache.php'; ?>
</div>


</body>
</html>