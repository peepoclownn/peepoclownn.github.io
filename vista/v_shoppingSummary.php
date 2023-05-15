<div style="grid-area: cart"; id="cartSummary">
    <div> <h2> TOTAL PRICE TO PAY: <?php echo $totalPrices; ?> €</h2> </div>
    <div> <h2> QUANTITY OF PRODUCTS: <?php echo $totalQuant; ?> </h2> </div>
    <div> <h2> LAST ADDED PRODUCT: </h2>  </div>
    <?php if(isset($lastProduct["foto"]))
    { ?>
    <img src="<?php echo $lastProduct["foto"];?>" />
   <?php  } ?>
</div>

