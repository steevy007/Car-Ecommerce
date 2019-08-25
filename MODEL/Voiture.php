<?php
    class Voiture{
        private $ID;
        private $IDU;
        private $Marque;
        private $Couleur;
        private $Milleage;
        private $Etat;
        private $prix;
        private $foto;
        private $description;
        private $devise;
        private $DateAjout;
        //constructeur de la classe
        public function __construct($ID,$IDU,$Marque,$Couleur,$Milleage,$Etat,$prix,$foto,$description,$DateAjout,$devise){
            $this->ID=$ID;
            $this->IDU=$IDU;
            $this->Marque=$Marque;
            $this->Couleur=$Couleur;
            $this->Milleage=$Milleage;
            $this->Etat=$Etat;
            $this->Prix=$prix;
            $this->foto=$foto;
            $this->descriptiom=$description;
            $this->DateAjout=date("Y-m-d");
            $this->descriptiom=$devise;
        }

        //Accesseur
        public function getID(){return $this->ID;}
        public function getIDU(){return $this->IDU;}
        public function getMarque(){return $this->Marque;}
        public function getCouleur(){return $this->Couleur;}
        public function getMilleage(){return $this->Milleage;}
        public function getEtat(){return $this->Etat;}
        public function getprix(){return $this->prix;}
        public function getfoto(){return $this->foto;}
        public function getdescription(){return $this->description;}
        public function getDateAjout(){return $this->DateAjout;}
        public function getDevise(){return $this->devise;}

        //Mutateur
        public function setID($ID){$this->ID=$ID;}
        public function setIDU($IDU){$this->IDU=$IDU;}
        public function setMarque($Marque){$this->Marque=$Marque;}
        public function setCouleur($Couleur){$this->Couleur=$Couleur;}
        public function setMilleage($Milleage){$this->Milleage=$Milleage;}
        public function setEtat($Etat){$this->Etat=$Etat;}
        public function setPrix($prix){$this->prix=$prix;}
        public function setFoto($foto){$this->foto=$foto;}
        public function setDescription($description){$this->description=$description;}
        public function setDateAjout($DateAjout){$this->DateAjout=$DateAjout;}
        public function setDevise($devise){$this->devise=$devise;}

        //fonction permettant d ajouter une voiture
        public function addCar(){
            include('ConnectionBD.php');
            $stmt = $BDD->prepare("INSERT into Voiture(IDU,Marque,Couleur,Milleage,Etat,Prix,foto,Description,DateAjout,devise) VALUES(?,?,?,?,?,?,?,?,?,?)");
            $stmt->execute(array($this->IDU,$this->Marque,$this->Couleur,$this->Milleage,$this->Etat,$this->prix,$this->foto,$this->description,$this->DateAjout,$this->devise));
            return $stmt;
        }
         //fonction permettant d ajouter une voiture
         public function editCar($id){
            include('ConnectionBD.php');
            $stmt = $BDD->prepare("UPDATE voiture set marque=?,couleur=?,milleage=?,etat=?,prix=?,description=?,devise=? where ID=?");
            $stmt->execute(array($this->Marque,$this->Couleur,$this->Milleage,$this->Etat,$this->prix,$this->description,$this->devise,$id));
            return $stmt;
        }
        //fonction permettant de Donner un nom a une voiture
        public function checkNom(){
            $this->foto = "CAR-" . rand(100000, 999999);
           while($this->verifierNom($this->foto)==true){
                $this->foto = "CAR-" . rand(100000, 999999);
            }

            return $this->foto;
    }

    //fonction permettant de tester l'existence d un nom
    public function verifierNom($foto){
        include('ConnectionBD.php');
        $execution=$BDD->prepare("SELECT foto from voiture where foto=? ");
        $execution->execute(array($foto));
        if($result=$execution->fetch()){
            return true;
        }else{
            return false;
        }
    }

     //fonction permettant de lister les voitures
     public function ListCar($id){
      include('ConnectionBD.php');
      $stmt = $BDD->prepare("SELECT * from voiture  where IDU=?");
      $stmt->execute(array($id));
    return $stmt;
  }

     public function ListCar2($id){
        include('ConnectionBD.php');
        $stmt = $BDD->prepare("select * from voiture inner join utilisateur on voiture.IDU=utilisateur.ID where voiture.ID=?");
        $stmt->execute(array($id));
      return $stmt;
    }

    public function ListCarAll(){
        include('ConnectionBD.php');
        $stmt = $BDD->prepare("SELECT * from voiture ");
        $stmt->execute();
      return $stmt;
    }
    public function ListCarAllLast(){
      include('ConnectionBD.php');
      $stmt = $BDD->prepare("SELECT * from voiture order by ID desc");
      $stmt->execute();
    return $stmt;
  }

     //fonction permettant de supprimer une voiture
     public function DeleteCar($id){
        include('ConnectionBD.php');
        $stmt = $BDD->prepare("DELETE from voiture where ID=?");
        $stmt->execute(array($id));
      return $stmt;
    }

         //fonction permettant de lister les voitures
         public function ListCar1($id){
            include('ConnectionBD.php');
            $stmt = $BDD->prepare("SELECT * from voiture where ID=?");
            $stmt->execute(array($id));
          return $stmt;
        }
    

}
?>