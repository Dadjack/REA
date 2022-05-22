<?php
    class Membres
    {
        /*-----------------------------------------------------
                            Attributs :
        -----------------------------------------------------*/ 
        private $id_membre;
        private $mail_membre;
        private $mdp_membre;

        /*-----------------------------------------------------
                            Constucteur (vide):
        -----------------------------------------------------*/        
        public function __construct()
        {
        }
        /*-----------------------------------------------------
                        Getter and Setter :
        -----------------------------------------------------*/
        //id_membres Getter and Setter
        public function getIdMembre()
        {
            return $this->id_membre;
        }
        public function setIdMembre($newIdMembre)
        {
            $this->id_membre = $newIdMembre;
        }
        //mail_membre Getter and Setter
        public function getMailMembre()
        {
            return $this->mail_membre;
        }
        public function setMailMembre($newMailMembre)
        {
            $this->mail_membre = $newMailMembre;
        }
        //mdp_membre Getter and Setter
        public function getMdpMembre()
        {
            return $this->mdp_membre;
        }
        public function setMdpMembre($newMdpMembre)
        {
            $this->mdp_membre = $newMdpMembre;
        }



        //METHODE AJOUT D'UN UTILISATEUR EN BDD
        public function createMembre($bdd)
        {   
            //RECUPERATION DES VALEURS DE L'OBJET
            $mail_membre = $this->getMailMembre();
            $mdp_membre = $this->getMdpMembre();
            try
            {   
                //REQUETE AJOUT D'UN MEMBRE
                $req = $bdd->prepare('INSERT INTO membres(mail_membre,mdp_membre) 
                VALUES (:mail_membre,:mdp_membre)');
                //EXECUTION DE LA REQUETE SQL
                $req->execute(array(
                'mail_membre' =>$mail_membre,
                'mdp_membre' => $mdp_membre,                                                                                                                             
            ));
            }
            catch(Exception $e)
            {
            //AFFICHAGE D'UNE EXCEPTION EN CAS D'ERREUR
            die('Erreur : '.$e->getMessage());
            }        
        }
    }
    
?>