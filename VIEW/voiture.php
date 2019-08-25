<?php
    session_start();
    require_once('../MODEL/Voiture.php');
    $VO=new Voiture("","","","","","","","","","","");
    $reponse=$VO->ListCarAllLast();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php require_once('CSS.php') ?>
    <title>Nos Voitures</title>
</head>
<body>
<?php
    if(isset($_SESSION['pseudo']) AND isset($_SESSION['type']) AND !empty($_SESSION['type']) AND !empty($_SESSION['pseudo'])){
        require_once('headerConn.php');
    }else{
        require_once('header.php');
    }
?>  

    <div class="my-car container">
        <div class="sec-car">
            <div class="search-sec">
                <center>
                <form action="">
                    <input type="search" placeholder="Votre Recherche">
                </form>
                </center>
            </div>  
        </div>

       
        <div class="affich-car">
        <?php
            while($data=$reponse->fetch()){
        ?>
                <div class="boi">
                    <div class="foto1">
                        <img src="<?php print($data['foto'])?>" alt="" srcset="">
                    </div>
                    <div class="inf1">
                        <h3>Marque <span><?php print($data['marque'])?></span></h3>
                        <h4>Milleage <span><span><?php print($data['milleage'])?> km/h</span></h4>
                      
                        <center>
                        <span><img src="ICONES/icons8_Star_Filled_16px.png" alt=""></span>
                        <span><img src="ICONES/icons8_Star_Filled_16px.png" alt=""></span>
                        <span><img src="ICONES/icons8_Star_Filled_16px.png" alt=""></span>
                        <span><img src="ICONES/icons8_Star_Filled_16px.png" alt=""></span>
                        <span><img src="ICONES/icons8_Star_Filled_16px.png" alt=""></span><br>
                        </center>

                        <img src="ICONES/icons8_Cash_in_Hand_40px.png" alt=""><span class="price"><b><span><?php print($data['prix'])?></b> <span><?php print($data['devise'])?></span>

                        <div class="po">
                            <a href="../CONTROLLER/moreInfo.controller.php?ID=<?php print($data['ID']) ?>">Plus Infos</a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
            </div>
           
    </div>

 <?php require_once('footer.php')?>
<?php require_once('JS.php')?>
</body>
</html>