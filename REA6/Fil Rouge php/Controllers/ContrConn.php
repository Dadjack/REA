<?php

ob_start();
// session_start();
include '../View/ViewConn2.php';
include '../Connexionbdd/connexionbdd2.php';




if(isset($_POST['mail_membre']) && isset($_POST['mdp_membre']))
{
    $mail_membre = htmlspecialchars($_POST['mail_membre']); 
    $mdp_membre = htmlspecialchars($_POST['mdp_membre']);
            echo "vérifié";

    
if($mail_membre !== null && $mdp_membre !== null)
    {
        $requete = "SELECT * FROM membres where mail_membre = '".$mail_membre."'";       

        $req = $bdd->query($requete);
        foreach($req->fetchAll() as $key){
            
            if (password_verify ($mdp_membre, $key['mdp_membre'])){
                header('Location:../View/IndexMembre.php');
                echo "Profitez en pour compléter votre compte";
                } else{
                echo "<p>Informations saisies incorrectes.</p>";
                }
        }
    }
}
        // $_SESSION['login_membre'] = $login_membre;
        // header('Location: Menu.php');
        // }
        // else
        // {
        // header('Location: VerifConn.php?erreur=1'); // utilisateur ou mot de passe incorrect

        /* else
        {
           header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: VerifConn.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
header('Location: Menu.php');
}
mysqli_close($bdd); // fermer la connexion */
?>