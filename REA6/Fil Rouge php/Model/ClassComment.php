<?php
    class Commentaires
    {
        /*-----------------------------------------------------
                            Attributs :
        -----------------------------------------------------*/ 
        private $id_commentaire;
        private $content_commentaire;
        private $date_commentaire;
        private $validation_commentaire;
        private $id_membre;
        private $id_produit;


        /*-----------------------------------------------------
                            Constucteur (vide):
        -----------------------------------------------------*/        
        public function __construct()
        {
        }
        /*-----------------------------------------------------
                        Getter and Setter :
        -----------------------------------------------------*/
        //id_commentaire Getter and Setter
        public function getIdCommentaire()
        {
            return $this->id_commentaire;
        }
        public function setIdCommentaire($newIdCommentaire)
        {
            $this->id_commentaire = $newIdCommentaire;
        }
        //content_commentaire Getter and Setter
        public function getContentCommentaire()
        {
            return $this->content_commentaire;
        }
        public function setContentCommentaire($newContentCommentaire)
        {
            $this->content_commentaire = $newContentCommentaire;
        }
        //date_commentaire Getter and Setter
        public function getDateCommentaire()
        {
            return $this->date_commentaire;
        }
        public function setDateCommentaire($newDateCommentaire)
        {
            $this->date_commentaire = $newDateCommentaire;
        }
        //mdp_membre Getter and Setter
        public function getValidationCommentaire()
        {
            return $this->validation_commentaire;
        }
        public function setValidationCommentaire($newValidationCommentaire)
        {
            $this->validation_commentaire = $newValidationCommentaire;
        }        


        //METHODE AJOUT D'UN UTILISATEUR EN BDD
        public function createCommentaire($bdd)
        {   
            //RECUPERATION DES VALEURS DE L'OBJET
            $content_commentaire = $this->getContentCommentaire();
            $date_commentaire = $this->getDateCommentaire();
            $validation_commentaire = $this->getValidationCommentaire();
            try
            {   
                //REQUETE AJOUT D'UN MEMBRE
                $req = $bdd->prepare('INSERT INTO commentaires(content_commentaire, date_commentaire, validation_commentaire) 
                VALUES (:content_commentaire, :date_commentaire, :validation_commentaire)');
                //EXECUTION DE LA REQUETE SQL
                $req->execute(array(
                'content_commentaire' => $content_commentaire,
                'date_commentaire' => $date_commentaire,
                'validation_commentaire' => $validation_commentaire,                                                                                                                              
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