<?php

include 'config.php';
if(isset($_GET['id_tache'])) {
    $id=$_GET['id_tache'];

$sql= 'DELETE FROM  `tache` WHERE  `id_tache` ='.$id;

$query= $conn->query($sql);
}

if (!$query) {
    echo "Erreur lors de la requête : $conn->error";
}

header('Location: page_liste.php');
exit();

?>