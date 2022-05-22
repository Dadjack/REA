<?php
    class Adresses
    {
        /*-----------------------------------------------------
                            Attributs :
        -----------------------------------------------------*/ 
        private $id_adresse;
        private $numero_adresse;
        private $rue_adresse;
        private $id_membre;
        private $id_ville;

        /*-----------------------------------------------------
                            Constucteur (vide):
        -----------------------------------------------------*/        
        public function __construct()
        {
        }
        /*-----------------------------------------------------
                        Getter and Setter :
        -----------------------------------------------------*/
        //id_adresse Getter and Setter
        public function getIdAdresse()
        {
            return $this->id_adresse;
        }
        public function setIdAdresse($newIdAdresse)
        {
            $this->id_adresse = $newIdAdresse;
        }
        //numero_adresse Getter and Setter
        public function getNumAdresse()
        {
            return $this->numero_adresse;
        }
        public function setNumAdresse($newNumAdresse)
        {
            $this->numero_adresse = $newNumAdresse;
        }
        //rue_adresse Getter and Setter
        public function getRueAdresse()
        {
            return $this->rue_adresse;
        }
        public function setRueAdresse($newRueAdresse)
        {
            $this->rue_adresse = $newRueAdresse;
        }


        //METHODE AJOUT D'UNE ADRESSE
        public function createAdresse($bdd)
        {   
            //RECUPERATION DES VALEURS DE L'OBJET
            $numero_adresse = $this->getNumAdresse();
            $rue_adresse = $this->getRueAdresse();
            try
            {   
                //REQUETE AJOUT D'UNE ADRESSE
                $req = $bdd->prepare('INSERT INTO adresses(numero_adresse, rue_adresse) 
                VALUES (:numero_adresse, :rue_adresse)');
                //EXECUTION DE LA REQUETE SQL
                $req->execute(array(
                'numero_adresse' => $numero_adresse,
                'rue_adresse' => $rue_adresse,                                                                                                                               
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