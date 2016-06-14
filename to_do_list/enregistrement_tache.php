<?php
/**
 * Created by PhpStorm.
 * User: toussaint
 * Date: 10/06/16
 * Time: 11:25
 */
 include 'config.php';

$titre= $_POST['titre'];
$jour= $_POST['j_limit'];
$cat= $_POST['catego'];
$prio= $_POST['priorite'];

$sql= "INSERT INTO tache(Titre, jour_limit, id_categorie, id_priorite ) VALUES('$titre', '$jour', $cat, $prio )";

$query= $conn->query($sql);

if (!$query) {
    echo "Erreur lors de la requête : $conn->error";
    exit();
}

header('Location: page_liste.php');
exit();