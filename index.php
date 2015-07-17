<?php

    include ("connexion_bdd.php");

    include("connexion.php")
        
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chat</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
 
     <div class="content-index">
  
        <h1>Bienvenue sur POEC CHAT !</h1>

    <!--    Formulaire de connexion-->
        <div class="form_connexion">

            <?php echo $erreur ?>
            <form action="index.php" method="post">
                <label for="pseudo">Pseudo</label><br/>
                <input type="text" name="pseudo" id="pseudo" /><br/>
                <label for="message">Mot de passe</label><br/> 
                <input type="password" name="pass" id="pass" /><br/>

                <input type="submit" value="valider" />

            </form>
        </div>
    </div>
</body>
</html>
