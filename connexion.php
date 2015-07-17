<?php
    
//    Renvoie l'utilisateur sur le chat si il est connecté

    if (isset($_SESSION["id"]))
    
	{
		header('Location: chat.php');
	}
   
    if(!empty($_POST))
    {

        foreach($_POST as $key => $valeur)
        {
            $$key = $valeur;
        }
        
        $sqlExist = "SELECT * FROM user WHERE user_pseudo = '".$pseudo."' and user_pass = '".$pass."' and user_statue = '1' ";
		$QueryExist = mysqli_query($lien, $sqlExist) or die ("SQL erreur ! ".$sqlExist);
		
		if(mysqli_num_rows($QueryExist) > 0)
		{
			$erreur = "Cet utilisateur est déjà connecté" ;
		}
		
		else
		{	
        
//        Création d'une session utilisateur

            $sql = "SELECT * FROM user WHERE user_pseudo='".$pseudo."' AND user_pass='".$pass."'";


            $req = mysqli_query($lien, $sql) or die('Erreur SQL ! '.$sql);

            if(mysqli_num_rows($req))
            {
                $result = mysqli_fetch_assoc($req);

                $_SESSION['id']= $result['id_user'];
                $_SESSION['pseudo']= $result['user_pseudo'];

                header('Location: chat.php');
            }  

            else 
            {
                echo 'mot de passe incorect';
            }
            
        }

    }
?>