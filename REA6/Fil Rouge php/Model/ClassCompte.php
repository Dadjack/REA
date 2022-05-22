<?php
    class Comptes
    {
        /*-----------------------------------------------------
                            Attributs :
        -----------------------------------------------------*/ 
        private $id_membre;
        private $nom_membre;
        private $prenom_membre;
        private $mot_de_passe_membre;
        private $telephone_membre;
        private $mail_membre;
        private $login_membre;

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
        //nom_membres Getter and Setter
        public function getNomMembre()
        {
            return $this->nom_membre;
        }
        public function setNomMembre($newNomMembre)
        {
            $this->nom_membre = $newNomMembre;
        }
        //prenom_membres Getter and Setter
        public function getPrenomMembre()
        {
            return $this->prenom_membre;
        }
        public function setPrenomMembre($newPrenomMembre)
        {
            $this->prenom_membre = $newPrenomMembre;
        }
        //mdp_membre Getter and Setter
        public function getMdpMembre()
        {
            return $this->mot_de_passe_membre;
        }
        public function setMdpMembre($newMdpMembre)
        {
            $this->mot_de_passe_membre = $newMdpMembre;
        }
        //telephone_membre Getter and Setter
        public function getTelMembre()
        {
            return $this->telephone_membre;
        }
        public function setTelMembre($newTelMembre)
        {
            $this->telephone_membre = $newTelMembre;
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
        //login_membre Getter and Setter
        public function getLoginMembre()
        {
            return $this->login_membre;
        }
        public function setLoginMembre($newLoginMembre)
        {
            $this->login_membre = $newLoginMembre;
        }


        //METHODE AJOUT D'UN UTILISATEUR EN BDD
        public function createMembre($bdd)
        {   
            //RECUPERATION DES VALEURS DE L'OBJET
            $nom_membre = $this->getNomMembre();
            $prenom_membre = $this->getPrenomMembre();
            $mot_de_passe_membre = $this->getMdpMembre();
            $telephone_membre = $this->getTelMembre();
            $mail_membre = $this->getMailMembre();
            $login_membre = $this->getLoginMembre();
            try
            {   
                //REQUETE AJOUT D'UN MEMBRE
                $req = $bdd->prepare('INSERT INTO membres(nom_membre, prenom_membre, mot_de_passe_membre, telephone_membre, mail_membre, login_membre) 
                VALUES (:nom_membre, :prenom_membre, :mot_de_passe_membre, :telephone_membre, :mail_membre, :login_membre)');
                //EXECUTION DE LA REQUETE SQL
                $req->execute(array(
                'nom_membre' => $nom_membre,
                'prenom_membre' => $prenom_membre,
                'mot_de_passe_membre' => $mot_de_passe_membre,
                'telephone_membre' => $telephone_membre,
                'mail_membre' => $mail_membre,
                'login_membre' => $login_membre,                                                                                                                                 
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