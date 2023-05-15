<!-- ENCAMINADOR -->
<?php
ini_set('display_errors', '1');
$filesAbsolutePath = '/home/TDIW/tdiw-e10/public_html/fitxers_externs/';
$filesPublicPath = '/fitxers_externs/';
session_start();
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else
{
    $action = "default";
}
        switch ($action) {
            case 'login':
                include __DIR__.'/login.php';
                break;
            case 'register':
                include __DIR__.'/register.php';
                break;
            case 'category':
                include __DIR__ .'/animals.php';
                break;
            case 'animal':
                include __DIR__. '/SingleProduct.php';
                break;
            case 'compteUsuari':
                include __DIR__ . '/compteUsuari.php';
                break;
            case 'cart':
                include __DIR__. '/shopping_cart.php';
                break;
            case 'logout':
                session_unset();
                include __DIR__ . '/llistaCat.php';
                break;
            case 'buy':
                include __DIR__ . '/endShopping.php';
                break;
            case 'historial':
                include  __DIR__ . '/historial_compres.php';
                break;
            default:
                include __DIR__ . '/llistaCat.php';
                break;
        }



?>