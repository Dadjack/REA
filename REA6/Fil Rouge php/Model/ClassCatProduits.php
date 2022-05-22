<?php
    class Categories
    {
        /*-----------------------------------------------------
                            Attributs :
        -----------------------------------------------------*/ 
        private $id_categorie_produit;
        private $nom_categorie;
        


        /*-----------------------------------------------------
                            Constucteur (vide):
        -----------------------------------------------------*/        
        public function __construct()
        {
        }
        /*-----------------------------------------------------
                        Getter and Setter :
        -----------------------------------------------------*/
        //id_categorie Getter and Setter
        public function getIdCategorie()
        {
            return $this->id_categorie;
        }
        public function setIdCategorie($newIdCategorie)
        {
            $this->id_categorie = $newIdCategorie;
        }
        //nom_categorie Getter and Setter
        public function getNomCategorie()
        {
            return $this->nom_categorie;
        }
        public function setNomCategorie($newNomCategorie)
        {
            $this->nom_categorie = $newNomCategorie;
        }



        //METHODE AJOUT D'UN UTILISATEUR EN BDD
        public function createCategorie($bdd)
        {   
            //RECUPERATION DES VALEURS DE L'OBJET
            $nom_categorie = $this->getNomCategorie();
            try
            {   
                //REQUETE AJOUT D'UN MEMBRE
                $req = $bdd->prepare('INSERT INTO categories_produits(nom_categorie) 
                VALUES (:nom_categorie)');
                //EXECUTION DE LA REQUETE SQL
                $req->execute(array(
                'nom_categorie' => $nom_categorie,                                                                                                                                 
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