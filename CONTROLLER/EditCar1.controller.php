<?php
session_start();
require_once('../MODEL/Voiture.php');
$VOI=new Voiture("","","","","","","","","","","");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    // Détermine sa destination finale. 
    if(isset($_POST['btn'])){
        $marque=htmlspecialchars($_POST['marque']);
        $couleur=htmlspecialchars($_POST['couleur']);
        $milleage=htmlspecialchars($_POST['milleage']);
        $etat=htmlspecialchars($_POST['etat']);
        $prix=htmlspecialchars($_POST['prix']);
        $desc=htmlspecialchars($_POST['desc']);
        $devise=htmlspecialchars($_POST['devise']);
        $id=htmlspecialchars($_POST['id']);
        $foto="IMAGES/mercedes-3510327_1920.jpg";
        if($prix<0){
            $_SESSION['err']='le prix doit etre positive';
            header("Location:../VIEW/editCar.php?marque=$marque&couleur=$couleur&milleage=$milleage&etat=$etat&id=$id&prix=$prix&devise=$devise&desc=$desc&foto=$foto");
           }else if($milleage<0){
            $_SESSION['err']='le Milleage doit etre positive';
            header("Location:../VIEW/editCar.php?marque=$marque&couleur=$couleur&milleage=$milleage&etat=$etat&id=$id&prix=$prix&devise=$devise&desc=$desc&foto=$foto");
        }else{
            $_SESSION['err']="";
            $VOI->setMarque($marque);
            $VOI->setCouleur($couleur);
            $VOI->setMilleage($milleage);
            $VOI->setEtat($etat);
            $VOI->setPrix($prix);
            $VOI->setDescription($desc);
            $VOI->setDevise($devise);
           
            $reponse=$VOI->editCar($id);
            if($reponse){
                header('Location:../VIEW/listCar.php');
            }
           
        }
    }
}
?>