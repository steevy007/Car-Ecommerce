<?php
       require_once('../MODEL/Voiture.php');
       $VOI=new Voiture("","","","","","","","","","","");
       $reponse=$VOI->ListCar1($_GET['data']);
       if($reponse){
           while($data=$reponse->fetch()){
            header("Location:../VIEW/editCar.php?marque=$data[marque]&couleur=$data[couleur]&milleage=$data[milleage]&etat=$data[etat]&prix=$data[prix]&devise=$data[devise]&foto=$data[foto]&desc=$data[description]&id=$data[ID]");
           }
       }
?>