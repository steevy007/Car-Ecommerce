<?php
session_start();
$id="";
$idu="";
$nom="";
$prenom="";
$adresse="";
$pays="";
$marque="";
$couleur="";
$etat="";
$milleage="";
$prix="";
$desc="";
$foto="";
$devise="";
$email="";
$tel="";
$date="";
if(isset($_GET['ID'])){
    $id=$_GET['ID'];
    $idu=$_GET['IDU'];
    $nom=$_GET['nom'];
    $prenom=$_GET['prenom'];
    $adresse=$_GET['adresse'];
    $pays=$_GET['pays'];
    $marque=$_GET['marque'];
    $couleur=$_GET['couleur'];
    $etat=$_GET['etat'];
    $milleage=$_GET['milleage'];
    $prix=$_GET['prix'];
    $desc=$_GET['desc'];
    $foto=$_GET['foto'];
    $devise=$_GET['devise'];
    $email=$_GET['email'];
    $tel=$_GET['telephone'];
    $date=$_GET['date'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php require_once('CSS.php') ?>
    <title>Plus Infos</title>
</head>
<body>
<?php
    if(isset($_SESSION['pseudo']) AND isset($_SESSION['type']) AND !empty($_SESSION['type']) AND !empty($_SESSION['pseudo'])){
        require_once('headerConn.php');
    }else{
        require_once('header.php');
    }
?>  
    <div class="in1 container">
        <div class="in2">
            <div class="pic">
                <div id="p1">
                    <img src="<?php print($foto)?>" alt="">
                </div>
                <div id="p2">
                <img src="<?php print($foto)?>" alt="">
                </div>
                <div id="p3">
                <img src="<?php print($foto)?>" alt="">
                </div>
            </div>

            <div class="in3">
                <div class="in3-1">
                    <h2>Info Sur Le Proprietaire</h2>
                    <div class="droite">
                    <h4> <span><img src="ICONES/icons8_Collaborator_Male_32px.png" alt=""></span>Marque</h4>
                    <h4> <span><img src="ICONES/icons8_Autograph_32px.png" alt=""></span> Prenom</h4>
                    <h4> <span><img src="ICONES/icons8_World_Map_32px.png" alt=""> </span> Adresse</h4>
                    <h4> <span><img src="ICONES/icons8_Country_32px.png" alt=""> </span> Pays</h4>
                    <h4> <span><img src="ICONES/icons8_Number_Pad_32px.png" alt=""> </span> Numero</h4>
                    <h4> <span><img src="ICONES/icons8_Composing_Mail_32px.png" alt=""> </span> Email</h4>
                    </div>

                    <div class="gauche">
                    <h4> <span><img src="ICONES/icons8_Pencil_32px.png" alt=""></span><?php print($nom)?></h4>
                    <h4> <span><img src="ICONES/icons8_Pencil_32px.png" alt=""></span> <?php print($prenom)?></h4>
                    <h4> <span><img src="ICONES/icons8_Pencil_32px.png" alt=""> </span> <?php print($adresse)?></h4>
                    <h4> <span><img src="ICONES/icons8_Pencil_32px.png" alt=""> </span> <?php print($pays)?></h4>
                    <h4> <span><img src="ICONES/icons8_Pencil_32px.png" alt=""> </span> <?php print($tel)?></h4>
                    <h4> <span><img src="ICONES/icons8_Pencil_32px.png" alt=""> </span> <?php print($email)?></h4>
                    </div>


                    <div class="bout">
                        <a href="">Negociez</a>
                    </div>
                </div>
                <div class="in3-2">
                <h2>Information Sur la voiture</h2>
                
                    <div class="droite">
                    <h4> <span><img src="ICONES/icons8_Collaborator_Male_32px.png" alt=""> </span> Marque</h4>
                    <h4> <span><img src="ICONES/icons8_Fill_Color_32px.png" alt=""> </span> Couleur</h4>
                    <h4> <span><img src="ICONES/icons8_Speed_32px.png" alt=""> </span>Milleage</h4>
                    <h4> <span><img src="ICONES/icons8_Autograph_32px.png" alt=""> </span>Etat</h4>
                    <h4> <span><img src="ICONES/icons8_Expensive_Price__32px.png" alt=""> </span>Prix</h4>
                    <h4> <span><img src="ICONES/icons8_Create_32px.png" alt=""> </span>Description</h4>
                    <h4> <span><img src="ICONES/icons8_Money_Yours_32px.png" alt=""> </span>Devise</h4>
                    <h4> <span><img src="ICONES/icons8_Calendar_32px.png" alt=""> </span>Date Ajout</h4>
                    </div>

                    <div class="gauche">
                    <h4> <span><img src="ICONES/icons8_Pencil_32px.png" alt=""> </span><?php print($marque)?> </h4>
                    <h4> <span><img src="ICONES/icons8_Pencil_32px.png" alt=""> </span> <?php print($couleur)?></h4>
                    <h4> <span><img src="ICONES/icons8_Pencil_32px.png" alt=""> </span><?php print($milleage)?></h4>
                    <h4> <span><img src="ICONES/icons8_Pencil_32px.png" alt=""> </span><?php print($etat)?></h4>
                    <h4> <span><img src="ICONES/icons8_Pencil_32px.png" alt=""> </span><?php print($prix)?></h4>
                    <h4> <span><img src="ICONES/icons8_Pencil_32px.png" alt=""> </span><?php print($desc)?></h4>
                    <h4> <span><img src="ICONES/icons8_Pencil_32px.png" alt=""> </span><?php print($devise)?></h4>
                    <h4> <span><img src="ICONES/icons8_Pencil_32px.png" alt=""> </span><?php print($date)?></h4>
                    </div>
                    <div class="bout">
                        <a href="">Acheter</a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
<?php require_once('footer.php')?>
<?php require_once('JS.php')?>
</body>
</html>