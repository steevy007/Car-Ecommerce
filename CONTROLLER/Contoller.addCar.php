<?php
session_start();
require_once('../MODEL/Voiture.php');
if($_SERVER["REQUEST_METHOD"]=="POST"){
    // Détermine sa destination finale. 
    if(isset($_FILES['file']) AND !empty($_FILES['file']['name'])){
        $nom=$_FILES["file"]["name"];
        $destination = "../VIEW/DB_IMAGES/$nom"; 
        $oFileInfos = $_FILES["file"]; 
        $fichier_temporaire = $oFileInfos["tmp_name"]; 
        $extension=array(".jpg",".jpeg",".gif",".png",".JPG",".JPEG",".PNG");
        $ext=strchr($_FILES['file']['name'],'.');
        $taille = $oFileInfos["size"]; 
        $marque=htmlspecialchars($_POST['marque']);
        $couleur=htmlspecialchars($_POST['couleur']);
        $milleage=htmlspecialchars($_POST['milleage']);
        $etat=htmlspecialchars($_POST['etat']);
        $prix=htmlspecialchars($_POST['prix']);
        $desc=htmlspecialchars($_POST['desc']);
        $devise=htmlspecialchars($_POST['devise']);
        $foto="IMAGES/mercedes-3510327_1920.jpg";
        $id="";
       
           if(!in_array($ext,$extension)){
            $id=1;
            $_SESSION['err']='type fichier non valide';
            header("Location:../VIEW/addCar.php?marque=$marque&couleur=$couleur&milleage=$milleage&etat=$etat&id=$id&prix=$prix&devise=$devise&desc=$desc&foto=$foto");
        }else if($taille>2000000){
            $id=1;
            $_SESSION['err']='fichier trop grand';
            header("Location:../VIEW/addCar.php?marque=$marque&couleur=$couleur&milleage=$milleage&etat=$etat&id=$id&prix=$prix&devise=$devise&desc=$desc&foto=$foto");
        }else if($prix<0){
               $id=1;
            $_SESSION['err']='le prix doit etre positive';
            header("Location:../VIEW/addCar.php?marque=$marque&couleur=$couleur&milleage=$milleage&etat=$etat&id=$id&prix=$prix&devise=$devise&desc=$desc&foto=$foto");
        }else if($milleage<0){
            $id=1;
            $_SESSION['err']='le Milleage doit etre positive';
            header("Location:../VIEW/addCar.php?marque=$marque&couleur=$couleur&milleage=$milleage&etat=$etat&id=$id&prix=$prix&devise=$devise&desc=$desc&foto=$foto");
        }else{
            $_SESSION['err']="";
            copy($fichier_temporaire,$destination);
            $VOI=new Voiture("","","","","","","","","","","");
            $N=$VOI->checkNom();
            $new_name=rename($destination,"../VIEW/DB_IMAGES/".$N.$ext).'<br> ';
            $dest="DB_IMAGES/$N$ext";
            $VOI->setMarque($marque);
            $VOI->setCouleur($couleur);
            $VOI->setMilleage($milleage);
            $VOI->setEtat($etat);
            $VOI->setPrix($prix);
            $VOI->setFoto($dest);
            $VOI->setDescription($desc);
            $VOI->setDevise($devise);
            $VOI->setIDU($_SESSION['ident']);
            $_SESSION['err']="";
            if($VOI->addCar()){
                header('Location:../VIEW/listCar.php');
            }
            //echo $VOI->checkNom();
           }
    }else{
        $_SESSION['err']="";
        header('Location:../VIEW/addCar.php');
    }
}
  /* ;

   $type=$_FILES['file']['type'];
   $size=$_FILES['file']['size'];

   //verfifier l extension
   $ext=pathinfo($name,PATH_EXTENSION);
   if(!array_key_exists($ext,$extension))die("Veuillez Charger un Image");
   // Récupére les informations sur le fichier. 
	$oFileInfos = $_FILES["file"]; 
 
	// nom du fichier. 
	$nom = $oFileInfos["name"]; 

	// le type MIME.  
	$type_mime = $oFileInfos["type"]; 

	// la taille. 
	$taille = $oFileInfos["size"]; 

	// emplacement du fichier temporaire. 
	$fichier_temporaire = $oFileInfos["tmp_name"]; 

	// le code d’erreur. 
    $code_erreur = $oFileInfos["error"]; 
    
    $extension=array("jpg"=>"image/jpg","jpeg"=>"image/jpeg","gif"=>"image/gif","png"=>"image/png");

    // Fichier bien reçu. 
			// Détermine sa destination finale. 
			$destination = "../VIEW/DB_IMAGES/$nom"; 

			// Copie le fichier temporaire 
			if (copy($fichier_temporaire,$destination))
			{ 
				// Copie OK
				$message  = "Transfert termine - Fichier = $nom - "; 
				$message .= "Taille = $taille octets - "; 
                $message .= "Type MIME = $type_mime."; 
                echo $message;

}
}*/

?>