<?php

//    Affichage des utilisateurs connectés

    include("connexion_bdd.php");

    $sql_user = "SELECT * FROM user WHERE user_statue = '1' ";
    $query_user = mysqli_query ($lien, $sql_user) or die ('EREUR SQL ! '.$sql_user);

    if(!mysqli_num_rows($query_user))
    {
        print("Pas d'utilisateurs connectés");
    }
    else
    {
        while($result_user = mysqli_fetch_assoc($query_user))
        {
            print ("<div>");
            print ($result_user["user_pseudo"]);
            print ("</div>");
        }
    }
?>