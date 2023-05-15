<?php

function getMaxID($conn)
{
    $result = pg_query($conn, "SELECT MAX(id) FROM public.sale");
    $max = pg_fetch_result($result, 0, 0);
    return $max;
}

function getID($conn, $userID)
{
    $sql = pg_query($conn, "SELECT id FROM public.sale WHERE user_id = $userID ORDER BY data DESC");
    $res = pg_fetch_all_columns($sql, 0);
    return $res;
}
function getTotalPrice($conn, $ID)
{
    $sql = pg_query($conn, "SELECT total_price FROM public.sale WHERE id = $ID");
    $res = pg_fetch_result($sql, 0,0);
    return $res;
}
function getQuant($conn, $prodID, $saleID)
{
    $sql = pg_query($conn, "SELECT quantity FROM public.sale_products WHERE product_id = $prodID AND sale_id=$saleID");
    $res = pg_fetch_result($sql, 0,0);
    return $res;
}
function getData($conn, $ID)
{
    $sql = pg_query($conn, "SELECT data FROM public.sale WHERE id = $ID");
    $res = pg_fetch_result($sql, 0,0);
    $data = date('d-m-Y', strtotime($res));
    return $data;
}

function insertSale($conn, $id_user, $totalPrice, $date)
{
    $sql = "INSERT INTO public.sale(user_id, total_price, data)
            VALUES($1, $2, $3)";
    $params = [$id_user, $totalPrice, $date];
    $result = pg_query_params($conn, $sql, $params);
    pg_fetch_all($result);
}

function insertSaleProds($conn, $saleID, $id, $quant)
{
    $sql = "INSERT INTO public.sale_products(sale_id, product_id, quantity) 
            VALUES($1, $2, $3)";
    $params = [$saleID, $id, $quant];
    $result = pg_query_params($conn, $sql, $params);
    pg_fetch_all($result);
}

function getIDSaleProds($conn, $id)
{
    $sql = pg_query($conn, "SELECT * FROM public.sale_products WHERE sale_id = $id");
    return pg_fetch_all_columns($sql, 1);
}

function getQuantSales($conn, $id)
{
    $sql = pg_query($conn, "SELECT COUNT(*) FROM public.sale WHERE user_id = $id");
    $quant = pg_fetch_result($sql,0,0); #retorna el primer element de la primera fila
    return (int) $quant;
}