<?php
/**
 * Created by PhpStorm.
 * User: toussaint
 * Date: 10/06/16
 * Time: 09:31
 */ include 'config.php';

$titre= $_POST['nom'];

$sql= "INSERT INTO categorie(`categories`) VALUES('$titre')";

$query= $conn->query($sql);

if (!$query) {
    echo "Erreur lors de la requête : $conn->error";
    exit();
}

header('Location: page_liste.php');
exit();