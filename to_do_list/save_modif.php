<?php
include 'config.php';

$titre= $_POST['etitre'];
$jour= $_POST['ej_limit'];
$cat= $_POST['ecatego'];
$prio= $_POST['epriorite'];
$id = $_POST['id'];

$sql= "UPDATE tache SET Titre= '$titre', jour_limit='$jour', id_categorie='$cat', id_priorite='$prio'
  WHERE id_tache='$id'";

$query= $conn->query($sql);
if (!$query) {
    echo "Erreur lors de la requête : $conn->error";
}

header('Location: page_liste.php');
exit();