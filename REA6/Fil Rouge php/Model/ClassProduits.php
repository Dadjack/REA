<?php
    class Produits
    {
        /*-----------------------------------------------------
                            Attributs :
        -----------------------------------------------------*/ 
        private $id_produit;
        private $photos_produit;
        private $description_produit;
        private $quantite_produit;
        private $prix_produit;
        private $id_categorie_produit;


        /*-----------------------------------------------------
                            Constucteur (vide):
        -----------------------------------------------------*/        
        public function __construct()
        {
        }
        /*-----------------------------------------------------
                        Getter and Setter :
        -----------------------------------------------------*/
        //id_produit Getter and Setter
        public function getIdProduit()
        {
            return $this->id_produit;
        }
        public function setIdProduit($newIdProduit)
        {
            $this->id_produit = $newIdProduit;
        }
        //photos_produit Getter and Setter
        public function getPhotosProduit()
        {
            return $this->photos_produit;
        }
        public function setPhotosProduit($newPhotosProduit)
        {
            $this->photos_produit = $newPhotosProduit;
        }
        //description_produit Getter and Setter
        public function getDescriptionProduit()
        {
            return $this->description_produit;
        }
        public function setDescriptionProduit($newDescriptionProduit)
        {
            $this->description_produit = $newDescriptionProduit;
        }
        //quantite_produit Getter and Setter
        public function getQuantiteProduit()
        {
            return $this->quantite_produit;
        }
        public function setQuantiteProduit($newQuantiteProduit)
        {
            $this->quantite_produit = $newQuantiteProduit;
        }
        //prix_produit Getter and Setter
        public function getPrixProduit()
        {
            return $this->prix_produit;
        }
        public function setPrixProduit($newPrixProduit)
        {
            $this->prix_produit = $newPrixProduit;
        }

        //METHODE AJOUT D'UN PRODUIT
        public function createProduit($bdd)
        {   
            //RECUPERATION DES VALEURS DE L'OBJET
            $photos_produit = $this->getPhotosProduit();
            $description_produit = $this->getDescriptionProduit();
            $quantite_produit = $this->getQuantiteProduit();
            $prix_produit = $this->getPrixProduit();
            try
            {   
                //REQUETE AJOUT D'UN PRODUIT
                $req = $bdd->prepare('INSERT INTO produits(photos_produit, description_produit, quantite_produit, prix_produit) 
                VALUES (:photos_produit, :description_produit, :quantite_produit, :prix_produit)');
                //EXECUTION DE LA REQUETE SQL
                $req->execute(array(
                'photos_produit' => $photos_produit,
                'description_produit' => $description_produit,
                'quantite_produit' => $quantite_produit,
                'prix_produit' => $prix_produit,
                
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