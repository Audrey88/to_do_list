<?php
/**
 * Created by PhpStorm.
 * User: toussaint
 * Date: 10/06/16
 * Time: 16:14
 */
include 'config.php';

$sql = "SELECT * FROM categorie";

$requete = $conn->query($sql);

while ($result = mysqli_fetch_object($requete)) {
    echo(
        "<li>" . "<strong>" . "<a href=\"page_liste.php?id_cat=" . $result->id_cat . "\">" . $result->categories . "</a>" . "</strong>" . "</li>" . "<br>");
}

?>