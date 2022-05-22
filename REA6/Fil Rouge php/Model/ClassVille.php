<?php
    class Villes
    {
        /*-----------------------------------------------------
                            Attributs :
        -----------------------------------------------------*/ 
        private $id_ville;
        private $ville_cp;
        private $ville_nom;


        /*-----------------------------------------------------
                            Constucteur (vide):
        -----------------------------------------------------*/        
        public function __construct()
        {
        }
        /*-----------------------------------------------------
                        Getter and Setter :
        -----------------------------------------------------*/
        //id_ville Getter and Setter
        public function getIdVille()
        {
            return $this->id_ville;
        }
        public function setIdVille($newIdVille)
        {
            $this->id_ville = $newIdVille;
        }
        //ville_cp Getter and Setter
        public function getVilleCp()
        {
            return $this->ville_cp;
        }
        public function setVilleCp($newVilleCp)
        {
            $this->ville_cp = $newVilleCp;
        }
        //ville_nom Getter and Setter
        public function getVilleNom()
        {
            return $this->ville_nom;
        }
        public function setVilleNom($newVilleNom)
        {
            $this->ville_nom = $newVilleNom;
        }
        


        //METHODE AJOUT D'UNE VILLE
        public function createVille($bdd)
        {   
            //RECUPERATION DES VALEURS DE L'OBJET
            $ville_cp = $this->getVilleCp();
            $ville_nom = $this->getVilleNom();
            try
            {   
                //REQUETE AJOUT D'UNE VILLE
                $req = $bdd->prepare('INSERT INTO villes(ville_cp, ville_nom) 
                VALUES (:ville_cp, :ville_nom)');
                //EXECUTION DE LA REQUETE SQL
                $req->execute(array(
                'ville_cp' => $ville_cp,
                'ville_nom' => $ville_nom,                                                                                                                               
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