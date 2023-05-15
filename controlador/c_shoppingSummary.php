<?php
ini_set('display_errors', '1');

include_once __DIR__ . '/../model/m_connectaBD.php';
include_once __DIR__ . '/../model/m_ProdAndCat.php';

$pr['nom_producte'] = "None";
$totalPrices = 0;
$totalQuant = 0;

$conn = connectaBD();

if (isset($_SESSION['product'])) {
    $productKeys = array_keys($_SESSION['product']);
    $productValues = array_values($_SESSION['product']);
} else {
    $productKeys = array();
    $productValues = array();
}

if (sizeof($productKeys) != 0) {
    $last = $_SESSION['last'];
} else {
    $last = 0;
}

$lastProduct = getProductById($conn, $last);

if (sizeof($productKeys) > 0) {
    foreach ($productKeys as $prodId){
        $products[] = getProductById($conn, $prodId);
    }
}
if (isset($products)) {
    foreach ($products as $pr) {
        $totalPrices += getPrice($pr);
        $totalQuant = (array_sum($productValues));
    }
}

include __DIR__ . '/../vista/v_shoppingSummary.php';


?>
