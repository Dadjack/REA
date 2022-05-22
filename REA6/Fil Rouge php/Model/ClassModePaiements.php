<?php
    class ModePaiements
    {
        /*-----------------------------------------------------
                            Attributs :
        -----------------------------------------------------*/ 
        private $id_paiement;
        private $libelle_paiement;



        /*-----------------------------------------------------
                            Constucteur (vide):
        -----------------------------------------------------*/        
        public function __construct()
        {
        }
        /*-----------------------------------------------------
                        Getter and Setter :
        -----------------------------------------------------*/
        //id_paiement Getter and Setter
        public function getIdPaiement()
        {
            return $this->id_paiement;
        }
        public function setIdPaiement($newIdPaiement)
        {
            $this->id_paiement = $newIdPaiement;
        }
        //libelle_paiement Getter and Setter
        public function getLibellePaiement()
        {
            return $this->libelle_paiement;
        }
        public function setLibellePaiement($newLibellePaiement)
        {
            $this->libelle_paiement = $newLibellePaiement;
        }


        //METHODE AJOUT D'UN PAIEMENT
        public function createPaiement($bdd)
        {   
            //RECUPERATION DES VALEURS DE L'OBJET
            $libelle_paiement = $this->getLibellePaiement();
            try
            {   
                //REQUETE AJOUT D'UN PAIEMENT
                $req = $bdd->prepare('INSERT INTO mode_paiements(libelle_paiement) 
                VALUES (:libelle_paiement)');
                //EXECUTION DE LA REQUETE SQL
                $req->execute(array(
                'libelle_paiement' => $libelle_paiement,                                                                                                                             
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