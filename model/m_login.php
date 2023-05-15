<?php

if (isset($_POST['login'])) {

    $sql = "SELECT * FROM public.users WHERE email = $1";
    $params = [$mail];
    $stmty = pg_query_params($conn, $sql, $params);

    $login_check = pg_num_rows($stmty);
    $row = pg_fetch_assoc($stmty);
    $hashed = $row['pass'];
    $hashed = str_replace(' ', '', $hashed);
    $correct = password_verify($password, $hashed);



    if($login_check == 1 && $correct){
        $_SESSION['id_user'] = $row['id_user'];
        $_SESSION['fotoprofile'] = $row['fotoprofile'];
        header("Location:/?action=index");
    }else{
        unset($_POST['mail']);
        echo '<script> alert("Invalid credentials");</script>';
    }

}

?>