<?php
     require_once('../MODEL/Voiture.php');
     $VO=new Voiture("","","","","","","","","","","");
     if(isset($_GET['ID'])){
         echo $_GET['ID'];
        $reponse=$VO->ListCar2($_GET['ID']);
        if($reponse){
            while($data=$reponse->fetch()){
                header("Location:../VIEW/CarInfos.php?ID=$data[ID]&IDU=$data[IDU]&nom=$data[nom]&prenom=$data[prenom]&pays=$data[pays]&adresse=$data[adresse]&marque=$data[marque]&couleur=$data[couleur]&milleage=$data[milleage]&etat=$data[etat]&prix=$data[prix]&desc=$data[description]&foto=$data[foto]&devise=$data[devise]&date=$data[dateAjout]&email=$data[email]&telephone=$data[telephone]");
               
            }
        }
     }
?>