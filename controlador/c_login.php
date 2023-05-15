<?php
ini_set('display_errors', '1');

    include_once __DIR__ . '/../model/m_connectaBD.php';

    $conn = connectaBD();
    if (isset($_POST['mail'])) {
        $mail = $_POST['mail'];
        $password = $_POST['contrasenya'];
    } else
    {
        $mail = null;
        $password = null;
    }
    include __DIR__ . '/../model/m_login.php';
    include __DIR__ . '/../vista/v_login.php';


?>
