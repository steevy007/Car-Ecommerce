<?php
    require_once('../MODEL/Voiture.php');
    $VOI=new Voiture("","","","","","","","","","","");
    //$reponse=;
    if($VOI->DeleteCar($_GET['data'])){
        header('Location:../VIEW/listCar.php');
    }
?>