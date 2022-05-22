<?php
/*-----------------------------------------------------
                        IMPORTS :
-----------------------------------------------------*/
        include '../View/ViewInsc2.php';
        include '../Model/ClassInsc2.php';
        include '../Connexionbdd/connexionbdd2.php';


/*-----------------------------------------------------
                        TESTS :
-----------------------------------------------------*/


//TEST SI LES CHAMPS SONT REMPLIS
if(isset($_POST['mail_membre']) && isset($_POST['mdp_membre']))
        {
                //TEST CORRESPONDANCE DE MDP
                        if($_POST['mdp_membre'] === $_POST['mdp_confirm']){
                                $mdphash = password_hash($_POST['mdp_membre'], PASSWORD_DEFAULT);
                                //CREATION D'UN UTILISATEUR (NOUVEL OBJET MEMBRES)

                                $newMembre = new Membres();
                                //INJECTION DES VALEURS DANS LE NOUVEL UTILISATEUR
                                $newMembre->setMailMembre($_POST['mail_membre']);
                                $newMembre->setMdpMembre($mdphash);

                                $newMembre->createMembre($bdd);
                        } else{
                                //AFFICHAGE DU MESSAGE D'ERREUR 
                                echo "<p>Les informations sont incorrectes.</p>";
                        }
                } else{
                        //AFFICHAGE DU MESSAGE D'ERREUR
                        echo "Veuillez remplir tous les champs.";
                }

?>