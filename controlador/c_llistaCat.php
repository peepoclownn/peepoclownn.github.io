<?php
ini_set('display_errors', '1');

    include_once __DIR__ . '/../model/m_connectaBD.php';
    include_once __DIR__ . '/../model/m_ProdAndCat.php';
    $conn = connectaBD();
    $category = getCategory($conn);
    include __DIR__ . '/../vista/v_categories.php';
?>