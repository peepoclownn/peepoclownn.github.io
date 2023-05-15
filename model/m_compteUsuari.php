<?php
if (isset($_POST['edit'])) {

    if (isset($_FILES['profile_image']) && !empty($_FILES['profile_image'])) {
        $filesImagePath = $filesAbsolutePath . $idSession . ".png";
        move_uploaded_file($_FILES['profile_image']['tmp_name'], $filesImagePath);
    }

    $imgprofile = $idSession . ".png";

    if($row['id_user'] == $idSession)
    {
        if ($_POST['newName'] == NULL) {
            $nom = $nomOld;
        } else {
            $nom = $_POST['newName'];
        }

        if ($_POST['newEmail'] == NULL) {
            $email = $emailOld;
        } else {
            $email = $_POST['newEmail'];
        }

        if($_POST['newAddress'] == NULL) {
            $addr = $addrOld;
        } else {
            $addr = $_POST['newAddress'];
        }

        if($_POST['newPoblacio'] == NULL) {
            $pob = $pobOld;
        } else {
            $pob = $_POST['newPoblacio'];
        }

        if($_POST['newCodi_postal'] == NULL) {
            $cp = $cpOld;
        } else {
            $cp = $_POST['newCodi_postal'];
        }

        $update = "UPDATE public.users SET (nom_complet, email, address, poblacio, codi_postal, fotoprofile)
                = ('$nom', '$email', '$addr', '$pob', '$cp', '$imgprofile') WHERE id_user='$idSession'";

        $result = pg_query($conn, $update);
        $products = pg_fetch_all($result);
        $_SESSION['fotoprofile'] = $imgprofile;
    }
}

?>