<?php
ini_set('display_errors', '1');

    include_once __DIR__ . '/../model/m_connectaBD.php';
    $conn = connectaBD();
    if (isset($_POST['nom'])) {
        $nom_complet = $_POST['nom'];
    } else {
        $nom_complet = null;
    }

    if (isset($_POST['mail'])) {
        $email = $_POST['mail'];
    } else {
        $email = null;
    }

    if (isset($_POST['contrasenya'])) {
        $password = $_POST['contrasenya'];
    } else {
        $password = null;
    }

    if (isset($_POST['address']))
    {
        $address = $_POST['address'];
    } else {
        $address = null;
    }

    if (isset($_POST['poblacio'])) {
        $poblacio = $_POST['poblacio'];
    } else {
        $poblacio = null;
    }

    if (isset($_POST['codi_postal'])) {
        $codi_postal = $_POST['codi_postal'];
    } else {
        $codi_postal = null;
    }

    $nom_complet = filter_var($nom_complet, FILTER_SANITIZE_STRING);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $address = filter_var($address, FILTER_SANITIZE_STRING);
    $poblacio = filter_var($poblacio, FILTER_SANITIZE_STRING);
    $codi_postal = filter_var($codi_postal, FILTER_SANITIZE_STRING);

    include_once __DIR__ . '/../model/m_register.php';
    include __DIR__ . '/../vista/v_register.php';
?>