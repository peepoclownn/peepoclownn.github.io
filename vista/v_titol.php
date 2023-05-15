<header id="superior" xmlns="http://www.w3.org/1999/html">
    <div style="grid-area: title"; id="titol">
        <div style="order:1; flex-grow:1"> <img src="../Fotos/logo.png" width=200px /> </div>
        <div style="order:2; flex-grow:20" > <a href="/?action=index"><h1> PUSH & HUMANSSS</h1> </a></div>
        <div style="order:3; flex-grow:1"> <button id="desplegable"> <img src="../Fotos/icono_usuari.png"  width=50px> </button>


            <div id="desplegat">

                <ul> <a href="/?action=login" target="_self" >Iniciar sessió</a>  </ul>
                <script> console.log("sin log"); </script>
            </div>



        </div>
        <div style="order:4; flex-grow: 1"> <button> <a href="/?action=cart"> <img src="../Fotos/carro_compra.png" width=50px /> </a> </button>  </div>
    </div>
</header>

<script type="text/javascript">
    $(document).ready(function(){
        $('#desplegable').click(function(){
            console.log("click");
            $('#desplegat').slideToggle();

        });

    });
</script>