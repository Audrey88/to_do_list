<?php
/**
 * Created by PhpStorm.
 * User: toussaint
 * Date: 10/06/16
 * Time: 16:14
 */
include 'config.php';
if (isset($_GET['id_cat'])) {
    $id = $_GET['id_cat'];

    $sql = "SELECT * FROM tache WHERE id_categorie=".$id;
    $query = $conn->query($sql);
    while ($result = mysqli_fetch_object($query)) {
        echo(
            "<li>" . "<strong>" . $result->Titre . "</strong>" . "  " . $result->jour_limit . "<br>categorie:" . $result->id_categorie . "<br>priorité" . $result->id_priorite . "</li>" . "<a href=\"supprimer.php?id_tache=" . $result->id_tache . "\">Terminer</a>" . "<br>" . "<a href=\"page_liste.php?id_tache=" . $result->id_tache . "\">editer</a>");
    }
}
else {
    $sql = "SELECT * FROM tache ORDER BY jour_limit ";

    $requete = $conn->query($sql);

    while ($result = mysqli_fetch_object($requete)) {
        echo(
            "<li>" . "<strong>" . $result->Titre . "</strong>" . "  " . $result->jour_limit . "<br>categorie:" . $result->id_categorie . "<br>priorité" . $result->id_priorite . "</li>" . "<a href=\"supprimer.php?id_tache=" . $result->id_tache . "\">Terminer</a>" . "<br>" . "<a href=\"page_liste.php?id_tache=" . $result->id_tache . "\">editer</a>");
    }
}
?>