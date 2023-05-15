<?php
ini_set('display_errors', '1');

    include __DIR__ . '/../model/m_connectaBD.php';
    include_once __DIR__ . '/../model/m_login.php';
    include_once __DIR__ . '/../model/m_SalesAndProds.php';

    $conn = connectaBD();    //Starting Session
    if(isset($_SESSION['id_user'])) {
        $user_id = (int) $_SESSION['id_user'];
        $quant = getQuantSales($conn, $user_id);
        include __DIR__ . '/../vista/v_titolLogged.php';
    }
    else {
        include __DIR__ . '/../vista/v_titol.php';

}

?>
