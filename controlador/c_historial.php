<?php
ini_set('display_errors', '1');

include_once __DIR__ . '/../model/m_connectaBD.php';
include_once __DIR__ . '/../model/m_SalesAndProds.php';
include_once __DIR__ . '/../model/m_ProdAndCat.php';
$conn = connectaBD();
$id_user = (int) $_SESSION['id_user'];

$id = getID($conn, $id_user);
foreach ($id as $ID) {
    $price = getTotalPrice($conn, $ID);
    $data = getData($conn, $ID);

    $prodsID = getIDSaleProds($conn, $ID);

    include __DIR__ . '/../vista/v_historial.php';
}
