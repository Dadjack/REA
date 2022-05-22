<?php
    class Commandes
    {
        /*-----------------------------------------------------
                            Attributs :
        -----------------------------------------------------*/ 
        private $id_commande;
        private $commande_produit;
        private $commande_date;
        private $id_paiement;
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
        //id_commande Getter and Setter
        public function getIdCommande()
        {
            return $this->id_commande;
        }
        public function setIdCommande($newIdCommande)
        {
            $this->id_commande = $newIdCommande;
        }
        //commande_produit Getter and Setter
        public function getCommandeProduit()
        {
            return $this->commande_produit;
        }
        public function setCommandeProduit($newCommandeProduit)
        {
            $this->commande_produit = $newCommandeProduit;
        }
        //commande_date Getter and Setter
        public function getCommandeDate()
        {
            return $this->commande_date;
        }
        public function setCommandeDate($newCommandeDate)
        {
            $this->commande_date = $newCommandeDate;
        }   


        //METHODE AJOUT D'UNE COMMANDE
        public function createCommande($bdd)
        {   
            //RECUPERATION DES VALEURS DE L'OBJET
            $commande_produit = $this->setCommandeProduit();
            $commande_date = $this->getCommandeDate();
            try
            {   
                //REQUETE AJOUT D'UNE COMMANDE
                $req = $bdd->prepare('INSERT INTO commandes(commande_produit, commande_date) 
                VALUES (:commande_produit, :commande_date)');
                //EXECUTION DE LA REQUETE SQL
                $req->execute(array(
                'commande_produit' => $commande_produit,
                'commande_date' => $commande_date,                                                                                                                             
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