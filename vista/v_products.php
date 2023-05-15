 <section id="zonaVenta">
                <?php foreach ($animals as $identifier): ?>
                <div id="article">
                        <div id="foto">
                            <h1> <?php echo $identifier["nom_producte"];?> </h1>
                            <img class="Product" id="<?php echo $identifier["id"];?>" src="<?php echo $identifier["foto"];?>" height=250 width=200>
                            <h3> <?php echo $identifier["preu"]; ?>€ </h3>
                        </div>
                </div>
                <?php endforeach;?>

 </section>


<script type="text/javascript">

    $(document).ready(function ()
    {
        $('.Product').click(function(e) // la e és l'element on fem click
        {
            $('#zonaVenta').hide().load('/?action=animal&product_id=' + e.target.id, function()
            {
                $(this).show();
            });
        });
    });

</script>