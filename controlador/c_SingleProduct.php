<?php
ini_set('display_errors', '1');

    include_once __DIR__ . '/../model/m_connectaBD.php';
    include_once __DIR__ . '/../model/m_ProdAndCat.php';
    $conn = connectaBD();
    $producte_id = $_GET['product_id'];
    $producte = getProductById($conn, $producte_id);
    include __DIR__ .'/../vista/v_singleProduct.php';

    ?>