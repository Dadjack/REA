<?php
/*-----------------------------------------------------
                        IMPORTS :
-----------------------------------------------------*/
        include '../View/ViewCompte.php';
        include '../Model/ClassCompte.php';
        include '../Connexionbdd/connexionbdd.php';


/*-----------------------------------------------------
                        TESTS :
-----------------------------------------------------*/


//TEST SI LES CHAMPS SONT REMPLIS
if(isset($_POST['nom_membre'],$_POST['prenom_membre'],$_POST['mot_de_passe_membre'],$_POST['telephone_membre'],$_POST['mail_membre'],$_POST['login_membre'] ))
        {
                //TEST CORRESPONDANCE DE MDP
                if($_POST['nom_membre'] != null && $_POST['prenom_membre'] != null && $_POST['mot_de_passe_membre'] != null && $_POST['telephone_membre'] != null && $_POST['mail_membre'] != null && $_POST['login_membre'] != null)
                { 
                
                        if($_POST['mot_de_passe_membre'] == $_POST['mdp_confirm_membre']){
                                
                                $mdphash = password_hash($_POST['mot_de_passe_membre'], PASSWORD_DEFAULT);
                                //CREATION D'UN UTILISATEUR (NOUVEL OBJET MEMBRES)

                                $newMembre = new Membres();
                                //INJECTION DES VALEURS DANS LE NOUVEL UTILISATEUR
                                $newMembre->setNomMembre($_POST['nom_membre']);
                                $newMembre->setPrenomMembre($_POST['prenom_membre']);
                                $newMembre->setMdpMembre($mdphash);
                                $newMembre->setTelMembre($_POST['telephone_membre']);
                                $newMembre->setMailMembre($_POST['mail_membre']);
                                $newMembre->setLoginMembre($_POST['login_membre']);

                                $newMembre->createMembre($bdd);
                        } else{
                                //AFFICHAGE DU MESSAGE D'ERREUR 
                                echo "<p>Les informations sont incorrectes.</p>";
                        }
                } else{
                        //AFFICHAGE DU MESSAGE D'ERREUR
                        echo "Veuillez remplir tous les champs.";
                }
        }

?>