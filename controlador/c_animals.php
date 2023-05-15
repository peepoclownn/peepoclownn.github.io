<?php
ini_set('display_errors', '1');

    include_once __DIR__ . '/../model/m_connectaBD.php';
    include_once __DIR__ . '/../model/m_ProdAndCat.php';
    $conn = connectaBD();
    $categoria_id = $_GET['animal_id'];
    $animals = getProducts($conn, $categoria_id);
    include __DIR__ . '/../vista/v_products.php';
    ?>