<?php
    class Paniers
    {
        /*-----------------------------------------------------
                            Attributs :
        -----------------------------------------------------*/ 
        private $id_panier;
        private $id_membre;


        /*-----------------------------------------------------
                            Constucteur (vide):
        -----------------------------------------------------*/        
        public function __construct()
        {
        }
        /*-----------------------------------------------------
                        Getter and Setter :
        -----------------------------------------------------*/
        //id_panier Getter and Setter
        public function getIdPanier()
        {
            return $this->id_panier;
        }
        public function setIdPanier($newIdPanier)
        {
            $this->id_panier = $newIdPanier;
        }
        //id_membre Getter and Setter
        public function getIdMembre()
        {
            return $this->id_membre;
        }
        public function setIdMembre($newIdMembre)
        {
            $this->id_membre = $newIdMembre;
        }


        //METHODE AJOUT D'UN PANIER
        public function createPanier($bdd)
        {   
            //RECUPERATION DES VALEURS DE L'OBJET
            $id_panier = $this->getIdPanier();
            $id_membre= $this->getIdMembre();
            try
            {   
                //REQUETE AJOUT D'UN PANIER
                $req = $bdd->prepare('INSERT INTO paniers(idPanier, idMembre) 
                VALUES (:idPanier, :idMembre)');
                //EXECUTION DE LA REQUETE SQL
                $req->execute(array(
                'idPanier' => $id_panier,
                'idMembre' => $id_membre,                                                                                                                             
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