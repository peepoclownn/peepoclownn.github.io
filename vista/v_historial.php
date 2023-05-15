<div class="background">
<div class = "Cabecera">
    <h1> Preu Compra: <?php echo $price ?> €</h1>
    <h1> Data Compra: <?php echo $data; ?></h1>
</div>
<?php foreach ($prodsID as $IDprod) {
            $product = getProductById($conn, $IDprod);
            $quant = getQuant($conn, $IDprod, $ID);

            ?>
            <div class = "productStyle">
                <div style="grid-area: foto"> <img src="<?php echo $product["foto"]; ?>" width="200" height="200"> </div>
                <div style="grid-area: nom"> <h3> Producte: <?php echo $product["nom_producte"];?></h3> </div>
                <div style="grid-area: preu"> <h3> Preu per unitat: <?php echo $product["preu"];?> €</h3> </div>
                <div style="grid-area: quantitat"> <h3> Quantitat: <?php echo $quant;?> </h3> </div>
            </div>
        <?php
        }?>
</div>

