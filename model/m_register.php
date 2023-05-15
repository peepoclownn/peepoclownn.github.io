<?php
if (isset($_POST['register'])) {
    $conn = connectaBD();

    $similarity = "SELECT * FROM public.users WHERE email = $1";
    $params = [$email];
    $stmty = pg_query_params($conn, $similarity, $params);
    $alreadyEmail = pg_num_rows($stmty);

    if($alreadyEmail == 0) {
        $passwordhashed = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO public.users(nom_complet, email, pass, address, poblacio, codi_postal) 
            VALUES($1, $2, $3, $4, $5, $6)";
        $params = [$nom_complet, $email, $passwordhashed, $address, $poblacio, $codi_postal];

        $result = pg_query_params($conn, $sql, $params);
        $products = pg_fetch_all($result);
        header("Location:/?action=index"); #retorna a la pagina inicial
    }
    else {
        ?>
        <script> alert("Perquè et vols registar? Si ja ho has fet abans..."); </script>
<?php
    }


}
?>
