
<br />
<img
        <?php if ($photoOld == "") { ?>
            src="../Fotos/icono_usuari.png"
        <?php } else{ ?>
         src="<?php echo $filesPublicPath . $photoOld ?>"
        <?php } ?>
         width="400 px"/>
<form action="" method="post" enctype="multipart/form-data">

    <br />
    <label for="avatar">Choose a profile picture:</label>

    <input type="file"
           id="avatar" name="profile_image"
           accept="image/png, image/jpeg"><br/>


    Nom Complet: <input type="text" name="newName" placeholder='<?php echo $nom ?>'/>
    <br />
    Correu Electònic: <input type="email" name="newEmail" placeholder='<?php echo $email ?>' />
    <br />
    Adreça: <input type="Address" name="newAddress" maxlength="30" placeholder='<?php echo $addr ?>'/>
    <br />
    Poblacio: <input type="name" name="newPoblacio" maxlength="30" placeholder='<?php echo $pob ?>'/>
    <br />
    Codi Postal: <input type="text" name="newCodi_postal" pattern="^\d{5}$" placeholder='<?php echo $cp ?>'>
    <br />
    <a href="/?action=compteUsuari"> <input type="submit" value="Guardar configuració" name="edit" id="saveSettings" required> </a> <br/>

</form>

<script>
    $(document).ready(function ()
    {
       $('#saveSettings').click(function ()
       {
           location.reload();
       })
    });
</script>