<?php
include 'config.php';

// récupère la valeur de l'url et voit si éditer ou si nouveau
if (isset($_GET['id_tache'])) {
    $id = $_GET['id_tache'];

    $sql = "SELECT * FROM tache WHERE id_tache=" . $id;
    $cat = "SELECT * FROM categorie";
    $prio = "SELECT * FROM priorite";

    $query =$conn->query($sql);
    $add = $conn->query($cat);
    $pri = $conn->query($prio);
    $result = $query->fetch_object();
    ?>


    <!-- formulaire poiur éditer un article! -->
    <h2>Editer Tâches:</h2>
    <form action="save_modif.php" method="POST">
        <input type="hidden" name="id" value="<?php echo($id); ?>">
        <p> TITRE:</p>
        <input type="text" name="etitre" value="<?php echo($result->Titre); ?>" required/>
        <p>Jour limite de la tâche:</p>
        <input type="date" name="ej_limit" value="<?php echo($result->jour_limit); ?>" required/>
        <p>Catégorie:</p>
        <select name="ecatego" required>
            <?php while ($categorie = mysqli_fetch_object($add)) { ?>
                <option value="<?php echo($categorie->id_cat); ?>"
                    <?php if ($categorie->id_cat == $result->id_categorie) {
                        echo 'selected';
                    } ?>
                >
                    <?= $categorie->categories ?>
                </option>
            <?php } ?>
        </select>
        <p>Priorité</p>
        <select name="epriorite" required>
            <?php while ($data = mysqli_fetch_object($pri)) { ?>
                <option value="<?php echo($data->id_prio); ?>"
                    <?php if ($data->id_prio == $result->id_priorite) {
                        echo 'selected';
                    } ?>
                >
                    <?= $data->priorite ?>
                </option>
            <?php } ?>
        </select> <br>
        <input type="submit">
    </form>

    <?php
} // SI L'ID est NULL formulaire pour créé!

else {
    ?>
    <h2>Formulaires Tâches:</h2>
    <form action="enregistrement_tache.php" method="POST">
        <p>Titre:</p>
        <input type="text" name="titre" required/>
        <p>Jour limite de la tâche:</p>
        <input type="date" name="j_limit" required/>
        <p>Catégorie:</p>
        <select name="catego" required>
            <?php
            $sql = 'SELECT * from categorie';
            $list = $conn->query($sql);
            while ($data = mysqli_fetch_object($list)) {
                echo('<option value="' . $data->id_cat . '">' . $data->categories . '</option>');
            }
            ?>
        </select>
        <p>Priorité</p>
        <select name="priorite" required>
            <?php
            $sql = 'SELECT * from priorite';
            $prio = $conn->query($sql);
            while ($data = mysqli_fetch_object($prio)) {
                echo('<option value="' . $data->id_prio . '">' . $data->priorite . '</option>');
            }
            ?>
        </select> <br>
        <input type="submit">
    </form>
    <?php
}
?>