<?php
    class Droits
    {
        /*-----------------------------------------------------
                            Attributs :
        -----------------------------------------------------*/ 
        private $id_droit;
        private $nom_droit;



        /*-----------------------------------------------------
                            Constucteur (vide):
        -----------------------------------------------------*/        
        public function __construct()
        {
        }
        /*-----------------------------------------------------
                        Getter and Setter :
        -----------------------------------------------------*/
        //id_droit Getter and Setter
        public function getIdDroit()
        {
            return $this->id_droit;
        }
        public function setIdDroit($newIdDroit)
        {
            $this->id_droit= $newIdDroit;
        }
        //nom_droit Getter and Setter
        public function getNomDroit()
        {
            return $this->nom_droit;
        }
        public function setNomDroit($newNomDroit)
        {
            $this->nom_droit = $newNomDroit;
        }


        //METHODE AJOUT D'UN DROIT
        public function createDroit($bdd)
        {   
            //RECUPERATION DES VALEURS DE L'OBJET
            $nom_droit = $this->getNomDroit();
            try
            {   
                //REQUETE AJOUT D'UN DROIT
                $req = $bdd->prepare('INSERT INTO droits(nom_droit) 
                VALUES (:nom_droit)');
                //EXECUTION DE LA REQUETE SQL
                $req->execute(array(
                'nom_droit' => $nom_droit,                                                                                                                             
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