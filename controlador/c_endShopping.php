<?php
include_once __DIR__ . '/../model/m_connectaBD.php';
include_once __DIR__ . '/../model/m_eliminateElem.php';
include_once __DIR__ . '/../model/m_SalesAndProds.php';
ini_set('display_errors', '1');

$conn = connectaBD();
$shoppingList = $_SESSION['product'];
$id_user = (int) $_SESSION['id_user'];
$totalPrice = $_SESSION['totalPrice'];
$date =  date('d-m-Y');

insertSale($conn, $id_user, $totalPrice, $date);
$saleID = getMaxID($conn);

foreach ($shoppingList as $id => $quant)
{
    insertSaleProds($conn, $saleID, $id, $quant);
}
unset($_SESSION['product']);
include __DIR__ . '/../vista/v_endShopping.php';