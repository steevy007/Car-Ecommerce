<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php require_once('CSS.php')?>
    <title >Dashboard</title>
</head>
<body>
<?php
    if(isset($_SESSION['pseudo']) AND isset($_SESSION['type']) AND !empty($_SESSION['type']) AND !empty($_SESSION['pseudo'])){
        if($_SESSION['type']=='SIMPLE'){
            header('Location:../index.php');
        }else{
            require_once('headerConn.php');
        }
    }else{
        header('Location:Connecter.php');
    }
?>  
    <div id="dash">
        <div class="sec ">
            <div class="sec2">
                <?php require_once('sidebar.php')?>
                <div class="sec002">
                    <div class="d1">
                        <h4>Nombre de Vehicules</h4>
                        <div class="info">
                            <span><b>1000</b></span>
                            <img src="ICONES/icons8_Car_32px.png" alt="">
                        </div>
                    </div>
                    <div class="d1">
                    <h4>Nombre de Visiteurs</h4>
                    <div class="info">
                            <span><b>1000</b></span>
                            <img src="ICONES/icons8_Ophthalmology_32px.png" alt="">
                        </div>
                    </div>
                    <div class="d1">
                    <h4>Nombre de Click</h4>
                    <div class="info">
                            <span><b>500</b></span>
                            <img src="ICONES/icons8_Left_Click_32px_1.png" alt="">
                        </div>
                    </div>
                    <div class="d1">
                    <h4>Nombre de Vente</h4>
                    <div class="info">
                            <span><b>1000</b></span>
                            <img src="ICONES/icons8_Sale_32px.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

       <?php require_once('footer.php')?>
       <?php require_once('JS.php')?>
</body>
</html>