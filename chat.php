<?php
    
    include ("connexion_bdd.php");

    include ("update_statue.php");


?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Formulaire</title>
        <link rel="stylesheet" href="css/style.css">
       <script src="jquery/dist/jquery.min.js"></script>
       <script src="script.js"></script>
        
    </head>
    
    <body>
   
        <div class="content">

    <!--        Gif de chargement-->
            <div class="chat bloc">
                
                <div id="box">
                    <img src="img/ajax-loader.gif">
                </div>
            </div>


    <!--       Utilisateurs connectés-->

            <div class = "connected bloc">

                <h3>Utilisateurs connectés</h3>

                <div id="utilisateur">   
                    <img src="img/ajax-loader2.gif">
                </div>
            
            

            </div>
            
            <div class="form" >
            
             <!--        Formulaire du chat-->

                <form action="chat.php" name="form" method="post">
                    <textarea name="message" cols="110" id="idmessage"></textarea>
                    <br/>
                    <input type="button" value="poet poet" id="bouton">
                    <a href="session_out.php">Se déconnecter</a> 
                </form>
                
            </div>
        
        </div>
    
    </body>
</html>