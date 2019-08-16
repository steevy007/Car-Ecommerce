<?php

    class User{
        private $id;
        private $nom;
        private $prenom;
        private $adresse;
        private $pays;
        private $telephone;
        private $pseudo;
        private $email;
        private $password;
        private $date_naissance;
        private $type_inscrit;
        private $date_inscription;

        //constructeur de la classe
        public function __construct($id,$nom,$prenom,$adresse,$pays,$telephone,$pseudo,$email,$password,$date_naissance,$type_inscrit,$date_inscription){
            $this->id=$id;
            $this->nom=$nom;
            $this->prenom=$prenom;
            $this->pays=$pays;
            $this->telephone=$telephone;
            $this->pseudo=$pseudo;
            $this->email=$email;
            $this->password=$password;
            $this->date_naissance=$date_naissance;
            $this->type_inscrit=$type_inscrit;
            $this->date_inscription=$date_inscription;
        }

        //accesseur
        public function getId(){return $this->id;}
        public function getNom(){return $this->nom;}
        public function getPrenom(){return $this->prenom;}
        public function getAdresse(){return $this->adresse;}
        public function getPays(){return $this->pays;}
        public function getTelephone(){return $this->telephone;}
        public function getPseudo(){return $this->pseudo;}
        public function getEmail(){return $this->email;}
        public function getPassword(){return $this->password;}
        public function getDate_Naissance(){return $this->date_naissance;}
        public function getType_Inscrit(){return $this->type_inscrit;}
        public function getDate_Inscription(){return $this->date_inscription;}

        //Mutateur
        public function setId($id){$this->id=$id;}
        public function setNom($nom){$this->nom=$nom;}
        public function setPrenom($prenom){$this->prenom=$prenom;}
        public function setAdresse($adresse){$this->adresse=$adresse;}
        public function setPays($pays){$this->pays=$pays;}
        public function setTelephone($telephone){$this->telephone=$telephone;}
        public function setPseudo($pseudo){$this->pseudo=$pseudo;}
        public function setEmail($email){$this->email=$email;}
        public function setPassword($password){$this->password=$password;}
        public function setDate_Naissance($date_naissance){$this->date_naissance=$date_naissance;}
        public function setType_Inscrit($type_inscrit){$this->type_inscrit=$type_inscrit;}
        public function setDate_Inscription($date_inscription){$this->date_inscription=$date_inscription;}


        //function permettant de connecter en tant que user
        public function Connecter(){
           
        }
        //function permettant de deconnecter en tant que user
        public function Deconnecterr(){}

        //function permettant d'inscrire un user
        public function Inscription(){
                include('ConnectionBD.php');
                $this->date_inscription=date("Y-m-d");
                $stmt = $BDD->prepare("INSERT into utilisateur(nom,prenom,adresse,telephone,pays,email,password,dateNaissance,pseudo,typeInscrit,dateInscription) VALUES(?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->execute(array($this->nom,$this->prenom,$this->adresse,$this->telephone,$this->pays,$this->email,$this->password,$this->date_naissance,$this->pseudo,$this->type_inscrit,$this->date_inscription));
                //$stmt->execute(array("Sanon","Steeve","Delmas",44111987,"HAITI","steevesanon6@gmail.com","1234","1997-10-10","kanou","Simple"));
            return $stmt;
        }
        //function permettant de savoir si le num existe
        public function checkMail($email){
            include('ConnectionBD.php');
            $stmt = $BDD->prepare("SELECT * from utilisateur where email=?");
            $stmt->execute(array($email));
            return $stmt->rowCount();
            
        }
        //function permettant de savoir si le num existe
        public function checkTel($tel){
            include('ConnectionBD.php');
            $stmt = $BDD->prepare("SELECT * from utilisateur where telephone=?");
            $stmt->execute(array($tel));
            return $stmt->rowCount(); 
           
        }

        //function permettant de savoir si le pseudo existe
        public function checkPseudo($pseudo){
            include('ConnectionBD.php');
            $stmt = $BDD->prepare("SELECT * from utilisateur where pseudo=?");
            $stmt->execute(array($pseudo));
            return $stmt->rowCount(); 
            
        }
    }
?>