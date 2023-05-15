
<section id ="section">
    <div id="body">

        <?php foreach ($category as $cat): ?>
        <?php $cat["nom"] = htmlentities($cat["nom"], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?> <!-- Comprova que no es llegeixi <script> -->
            <div style="grid-area: <?php echo $cat["nom"];?>">
                 <h1> <?php echo $cat["nom"] ?> </h1>
                <img class= "Foto" id="<?php echo $cat["id"];?>" src="<?php echo $cat["foto"];?>" width=450px height=200px </>
            </div>
        <?php endforeach; ?>
    </div>
</section>


<script type="text/javascript">

    $(document).ready(function ()
    {
        $('.Foto').click(function(e) // la e és l'element on fem click
        {
            $('#section').hide().load('/?action=category&animal_id=' + e.target.id, function()
            {
                $(this).show();
            });
        });
    });

</script>
