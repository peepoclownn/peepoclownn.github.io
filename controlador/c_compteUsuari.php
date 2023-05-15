<?php
ini_set('display_errors', '1');
include_once __DIR__ . '/../model/m_connectaBD.php';
include_once __DIR__ . '/../model/m_ProdAndCat.php';
$conn = connectaBD();
$idSession = $_SESSION['id_user'];

$row = getUsers($conn, $idSession);

$nomOld = $row['nom_complet'];
$emailOld = $row['email'];
$addrOld = $row['address'];
$pobOld = $row['poblacio'];
$cpOld = $row['codi_postal'];
$photoOld = $row['fotoprofile'];

if (isset($_POST['newName'])) {
    $nom = $_POST['newName'];
} else {
    $nom = $nomOld;
}

if (isset($_POST['newEmail'])) {
    $email = $_POST['newEmail'];
} else {
    $email = $emailOld;
}

if (isset($_POST['newAddress'])) {
    $addr = $_POST['newAddress'];
} else {
    $addr = $addrOld;
}

if (isset($_POST['newPoblacio'])) {
    $pob = $_POST['newPoblacio'];
} else {
    $pob = $pobOld;
}

if (isset($_POST['newCodi_postal'])) {
    $cp = $_POST['newCodi_postal'];
} else {
    $cp = $cpOld;
}

include_once __DIR__ . '/../model/m_compteUsuari.php';
include __DIR__ .'/../vista/v_compteUsuari.php';
?>