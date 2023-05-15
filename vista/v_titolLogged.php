<header id="titol">
        <div style="order:1; flex-grow:1"> <img src="../Fotos/logo.png" width=200px /> </div>
        <div style="order:2; flex-grow:20" > <a href="/?action=index"><h1> PUSH & HUMANSSS</h1> </a></div>
        <div style="order:3; flex-grow:1"> <button id="desplegable">
                <img <?php if ($_SESSION['fotoprofile'] == "") { ?>
                    src="../Fotos/icono_usuari.png"
                <?php } else{ ?>
                    src="<?php echo $filesPublicPath . $_SESSION['fotoprofile'] ?>"
                <?php } ?> width=50px > </button>

            <div id="desplegat">

                <ul> <a href="/?action=compteUsuari" target="_self"> El meu compte </a></ul>
                <ul id="historial"> <a href="/?action=historial" target="_self"> Les meves comandes </ul>
                <?php if ($quant == 0){ ?>
                    <script>
                        document.getElementById("historial").addEventListener("click", function (event)
                        {
                            event.preventDefault();
                            alert("EL HISTORIAL ESTÀ BUIT, COMPRA ALGUNA COSA! :D");
                        });
                    </script>

                <?php } ?>
                <ul> <a href="/?action=logout" target="_self">Tancar sessió </a>  </ul>
                <script> console.log("logged"); </script>

            </div>

        </div>

    <div style="order:4; flex-grow: 1"> <button> <a href="/?action=cart"> <img src="../Fotos/carro_compra.png" width=50px /> </a> </button>  </div>

</header>

<script type="text/javascript">
    $(document).ready(function(){
        $('#desplegable').click(function(){
            console.log("click");
            $('#desplegat').slideToggle();

        });

    });
</script>