<?php

//    Affichage des messages du chat

    include("connexion_bdd.php");

    $sql_message = "SELECT * FROM message, user WHERE id_user = message_id_user ORDER BY message_date";
    $query_message = mysqli_query ($lien, $sql_message) or die ('EREUR SQL ! '.$sql_message);

    if(!mysqli_num_rows($query_message))
    {
        print("Pas de message");
    }
    else
    {
        while($result_message = mysqli_fetch_assoc($query_message))
        {
            print ("<div id='affiche'>");
            print ($result_message["user_pseudo"]. " : ");
            print ($result_message["message_text"]. " le ");
            print (date("d-m-Y H:i:s",strtotime($result_message["message_date"])));
            print ("</div>");
        }
    }
?>


