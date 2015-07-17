<?php

//    Change le statue utilisateur à 1 pour confirmer qu'il vient de se connecter au chat

    if (!isset($_SESSION["id"]))
    
	{
		header('Location: index.php');
	} 
    
    $id = $_SESSION["id"];

    $sql_update = "UPDATE user set user_statue = '1' where id_user = '".$id."' ";

    $query_update = mysqli_query ($lien, $sql_update) or die ('EREUR SQL ! '.$sql_update);

?>