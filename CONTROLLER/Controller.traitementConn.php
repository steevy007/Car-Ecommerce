<?php
session_start();
require_once('../MODEL/User.php');
$US=new User("","","","","","","","","","","","");
if(isset($_POST['btn'])){
    $pseudo=htmlspecialchars($_POST['pseudo']);
    $pass=htmlspecialchars($_POST['pass']);
    $_SESSION['pseudo'];
    $_SESSION['type'];
    $US->setPseudo($pseudo);
    $US->setPassword($pass);
    $reponse=$US->Connecter();
    
    //echo $US->Connecter()->rowCount();
    if($US->Connecter()->rowCount()==1){ 
        while($data=$reponse->fetch()){
            $_SESSION['pseudo']=$data['pseudo'];
            $_SESSION['type']=$data['typeInscrit'];
        }
        header('Location:../index.php');
    }else{
        $_SESSION['id']=-1;
        header('Location:../VIEW/connecter.php');
    }
}
?>