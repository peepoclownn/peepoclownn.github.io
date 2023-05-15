<header id= "titol">
    <h1>Formulari de registre:</h1>
</header>

<section id="register">
    <form method="post" action="">
        Nom Complet:<br /> <input type="fname" name="nom" pattern="[A-Za-z \s]+" title="Utilitza només caràcters alfanumèrics i  siusplau" required/> <br />
        <br />
        Correu Electrònic:<br /> <input type="email" name="mail" required/> <br />
        <br />
        Contrasenya: <br/> <input type="password" name="contrasenya" pattern="[A-Za-z0-9]+" title="Utilitza només caràcters alfanumèrics" required/> <br />
        <br />
        Adreça:<br /> <input type="Address" name="address" maxlength="30" required/> <br />
        <br />
        Població:<br /> <input type="name" name="poblacio"  pattern="[a-zA-Z-\s,.]+" title="Utlitza només lletres, espais, comes, punts i el símbol - siusplau" maxlength="30" required/> <br />
        <br />
        <!-- El + en el pattern va afegint el que pot posar l'usuari i que no, el \s es l'espai-->
        Codi Postal:<br /> <input type="text" name="codi_postal" pattern="[0-9]^\d{5}$+" title="El codi postal ha de contenir 5 digits" required> <br />
        <!-- El del Elias -->
        Codi Postal:<br /> <input type="text" name="codi_postal" pattern="[0-9]" minlength="5" maxlength="5" title="El codi postal ha de contenir 5 digits" required> <br />
        <br />
        <a href="/?action=index"> <input type="submit" value="Registrar-me" name="register" required> </a> <br/>
        <br />
    </form>

    Ja tens un compte? <a href="/?action=login" target="_self">Sign Up </a>
    <br/>
    Tornar a la pàgina principal <a href="/?action=index" target="_self">  aqui </a>

</section>
