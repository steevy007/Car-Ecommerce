<?php
require_once('../MODEL/User.php');
$US=new User("","","",0,"","","","","","","","");
    if(isset($_POST['sub'])){
        $message="";
        $nom=htmlspecialchars($_POST['nom']);
        $prenom=htmlspecialchars($_POST['prenom']);
        $adresse=htmlspecialchars($_POST['adresse']);
        $telephone=htmlspecialchars($_POST['Telephone']);
        $pays=htmlspecialchars($_POST['pays']);
        $type=htmlspecialchars($_POST['type']);
        $pseudo=htmlspecialchars($_POST['pseudo']);
        $password=htmlspecialchars($_POST['password']);
        $password1=htmlspecialchars($_POST['password1']);
        $dateN=htmlspecialchars($_POST['dateN']);
        $email=htmlspecialchars($_POST['mail']);

        

        echo $US->checkMail($email);
        echo $US->checkTel($telephone);
        echo $US->checkPseudo($pseudo);
        
        if($password1!=$password){
           
            $message="Mot de passe non identique";
            header("Location:../VIEW/inscription.php?Message=$message");
        }else if(strlen($pseudo)>10){
            $message="Pseudo ne doit pas depasser 10 caractere";
            header("Location:../VIEW/inscription.php?Message=$message");
        }else if(strlen($telephone)>8){
            $message="Numero Incorrecte elle doit avoir 8 chiffre";
            header("Location:../VIEW/inscription.php?Message=$message");
        }else if($US->checkMail($email)>0){
            $message="Ce Mail Existe Deja";
            header("Location:../VIEW/inscription.php?Message=$message");
        }else if($US->checkTel($telephone)>0){
            $message="Ce Numero Existe Deja";
            header("Location:../VIEW/inscription.php?Message=$message");
        }else if($US->checkPseudo($pseudo)>0){
            $message="Ce Pseudo Existe Deja";
            header("Location:../VIEW/inscription.php?Message=$message");
        }else{
            $US->setNom($nom);
            $US->setPrenom($prenom);
            $US->setAdresse($adresse);
            $US->setPays($pays);
            $US->setTelephone($telephone);
            $US->setPseudo($pseudo);
            $US->setEmail($email);
            $US->setPassword($password);
            $US->setDate_Naissance($dateN);
            $US->setType_Inscrit($type);
            

            $reponse=$US->Inscription();
            if($reponse){
                header('Location:../VIEW/connecter.php');
            }
        }

    }
    
?>