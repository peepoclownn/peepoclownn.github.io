<div class="cartPage">
    <div id="zonaVenta">
    <?php if (isset($products))
    {
    foreach ($products as $p) {  ?>
    <?php $aux = $_SESSION['product'];
        ?>
    <div id="article">
            <div id="foto">
                    <img class = "cartImgID" id= "<?php echo $p["id"];?>" src="<?php echo $p["foto"];?>" height=250 width=200>
                    <h2><?php
                        echo $p['nom_producte'];
                        ?> </h2>
                    <h3 id="Quant"> Quantity:
                        <?php
                        $quant = $aux[$p["id"]];
                        echo $quant;
                        ?>
                    </h3>
                    <h3> Total Price:
                        <?php
                        $pricePerElem = $p['preu'] *  $aux[$p["id"]];
                        $totalPrice += $pricePerElem;
                        echo $pricePerElem;
                        ?> €
                    </h3>
                <img src="../Fotos/add.png" class="AddButton" width="40" id="<?php echo $p["id"];?>">
                <img src="../Fotos/minus.png" class="MinusButton" width="40" id="<?php echo $p["id"];?>">

                <button class="Eliminar" id="<?php echo $p["id"];?>"> ELIMINAR EL PRODUCTE </button>
            </div>
     </div>

    <?php } ?>
</div>
    <?php $_SESSION['totalPrice'] = $totalPrice; ?>
    <h1> TOTAL PRICE TO PAY: <?php echo $totalPrice?>€ </h1>
    <button class="EliminarTodo"> ELIMINAR TOT </button>
    <button id="buy"> <a href="/?action=buy"> FINALITZAR COMPRA </a> </button>
<?php } else {?>
    <h1> EL CABÀS ESTÀ BUIT, TORNA QUAN REALITZIS UNA COMPRA <br>
        <br> <a href="/?action=index"> Per tornar a la pàgina inicial aqui </a> </h1>
   <?php }   ?>
    <?php if (isset($_SESSION['id_user']) && $totalPrice < 3.00) { ?>
        <script type="text/javascript">
            document.getElementById("buy").addEventListener("click", function (event)
            {
                event.preventDefault();
                alert("ENCARA NO POTS COMPRAR EL RES! PODER D'AQUÍ UNS ANYS SI... PERO DE MOMENT... A COMPRAR!");
            });
        </script>

   <?php } else if (!isset($_SESSION['id_user'])){ ?>
        <script type="text/javascript">
            document.getElementById("buy").addEventListener("click", function (event)
            {
                event.preventDefault();
                window.location = "/?action=login";
            });
        </script>
  <?php  }?>

</div>

<script type="text/javascript">

    $(document).ready(function ()
    {
        $('.AddButton').click(function()
        {
            $.ajax({
                type: "POST",
                url: "/controlador/c_addProduct.php",
                data: {
                    id: $(this).attr('id'), //Devuelve el ID de class, en este caso de la foto
                    quantity: 1
                },
                success: function () {
                    location.reload();
                },
                error: function () {
                    alert("Error");
                }
            });
        });

        $('.MinusButton').click(function()
        {
            $.ajax({
                type: "POST",
                url: "/controlador/c_addProduct.php",
                data: {
                    id: $(this).attr('id'), //Devuelve el ID de class, en este caso de la foto
                    quantity: -1
                },
                success: function () {
                    location.reload();
                },
                error: function () {
                    alert("Error");
                }
            });
        });

        $('.Eliminar').click(function()
        {
            ID = $(this).attr('id');
            $('.cartPage').load("/../controlador/c_elimProds.php",{id:ID}, function()
            {
                location.reload();
            });
        });

        $('.EliminarTodo').click(function()
        {
            ID = $(this).attr('id');
            $('.cartPage').load("/../controlador/c_elimProds.php", function()
            {
                location.reload();
            });
        });
    });


</script>
