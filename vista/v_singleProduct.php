<section id="VistaProd">
    <div id="article">
            <div id="foto">
                    <h1> <?php echo $producte["nom_producte"];?> </h1>
                    <img class = "idImg" id= "<?php echo $producte["id"];?>"src="<?php echo $producte["foto"];?>" height=250 width=200 >
                    <p> <?php echo $producte["descripcio"]; ?> </p>
                    <h3> <?php echo $producte["preu"]; ?>€ </h3>
                    <button class="AfegirCistella"> Afegir a la cistella </button>
                <input type="number" class="Quantitat" name="Quantitat" min="1" value="1">
                    <p style="opacity: 0%" class="shopped"> AFEGIT AL CARRO!</p>
            </div>
    </div>
</section>

<script type="text/javascript">
    $(document).ready(function ()
    {
        $('.AfegirCistella').click(function() {

            $(".shopped").animate({opacity: '100%'});
            $(".shopped").animate({duration: '10000'});
            $(".shopped").animate({opacity: '0%'});
            ID = $(".idImg").attr('id');
            quant = $(".Quantitat").val();
            $("#cartSummary").load("/../controlador/c_addProduct.php",{id:ID, quantity:quant}, function()
            {
                $("#cartSummary").show();
            });
        });
    });




</script>