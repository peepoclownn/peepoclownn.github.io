<?php

    function getProducts($conn, $categoria_id)
    {
        $result = pg_query($conn, "SELECT * FROM product WHERE category_id = $categoria_id");
        $animals = pg_fetch_all($result);
        return $animals;
    }

    function getCategory($conn)
    {
        $result = pg_query($conn, "SELECT * FROM category;");
        $category =  pg_fetch_all($result);
        return $category;
    }

    function getProductById($conn, $prod_id){
        $result = pg_query($conn, "SELECT * FROM product WHERE id=$prod_id");
        $producte = pg_fetch_all($result);

        return $producte[0] ?? null; #si producte[0] no existeix, retornem null
    }

    function getPrice($products)
    {
        $aux = $_SESSION['product'];
        $pricePerElem = $products['preu'] * $aux[$products["id"]];

        return $pricePerElem;
    }

    function getUsers($conn, $idSession)
    {
        $sql = "SELECT * FROM public.users WHERE id_user = $1";
        $params = [$idSession];
        $stmty = pg_query_params($conn, $sql, $params);

        $row = pg_fetch_assoc($stmty);

        return $row;
    }
?>