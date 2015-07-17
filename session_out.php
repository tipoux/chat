<?php
			
    // Desctruction de la session et redirection vers l'accueil

    include ("connexion_bdd.php");

    $id = $_SESSION["id"];

    $sql_update = "UPDATE user set user_statue = '0' where id_user = '".$id."' ";

    $query_update = mysqli_query ($lien, $sql_update) or die ('EREUR SQL ! '.$sql_update);

    unset($_SESSION);
    unset($_COOKIE);

    session_destroy();

    header('Location: index.php');

?>


