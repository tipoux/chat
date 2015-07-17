<?php
    
    include ("connexion_bdd.php");

    $id = $_SESSION["id"];

    if(!empty($_POST))
    {

        foreach($_POST as $key => $valeur)
        {
            $$key = $valeur;
        }   
        
//    Insertion des messages du chat dans la base de données
        
    $sql= 'INSERT INTO message VALUES ("", "'.$message.'", "'.date("Y-m-d H:i:s").'", "'.$id.'" )';

    $query = mysqli_query($lien, $sql) or die ("erreur sql");
        
    
    }
?>