<?php
session_start();
ini_set('display_errors', '1');
if (!isset($_SESSION['product']))
{
    $_SESSION['product'] = array();
    $_SESSION['last'] = null;
}
$prod_id = $_POST['id'];
$quant = (int) $_POST['quantity'];
$aux = $_SESSION['product'];
$_SESSION['last'] = $_POST['id'];
if (!isset($aux[$prod_id]))
{
    $aux[$prod_id] = $quant; # == SESSION[gorra] = 5 ---> dins l'array, el producte gorra tindrà una quantitat de 5
} else
{
    if ($aux[$prod_id] == 1 && $quant > 0) {
        $aux[$prod_id] += $quant;
    } else if ($aux[$prod_id] == 1 && $quant < 0)
    {
        $aux[$prod_id] = 1;
    } else
    {
        $aux[$prod_id] += $quant;
    }
}
$_SESSION['product'] = $aux;

include __DIR__ . '/c_shoppingSummary.php'; #aquest include es fa pq es recarregui el resum sense la necessitat de actualitzar la pagina

