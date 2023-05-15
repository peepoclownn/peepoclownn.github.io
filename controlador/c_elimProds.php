<?php
session_start();
ini_set('display_errors', '1');

include_once __DIR__ . '/../model/m_connectaBD.php';
include __DIR__ . '/../model/m_eliminateElem.php';

$conn=connectaBD();

$prod = $_SESSION['product'];
$id = $_POST['id'];
if ($id != NULL) {
    $prod = eliminElem($prod, $id);
}else
{
    $prod = elimAll($prod);
}
$_SESSION['product'] = $prod;

include __DIR__ . '/c_shopping_cart.php';
