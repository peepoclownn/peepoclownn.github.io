<?php
ini_set('display_errors', '1');

include __DIR__ . '/../model/m_ProdAndCat.php';

$conn = connectaBD();
if (!isset($_SESSION['product']))
{
    $productKeys = array();
}else {
    $productKeys = array_keys($_SESSION['product']);
}
$totalPrice = 0;
if (sizeof($productKeys) > 0) {
    foreach ($productKeys as $prodId) {
        $products[] = getProductById($conn, $prodId);
    }
}
include __DIR__ .'/../vista/v_shopping_cart.php';
