<?php
    session_start();
    require_once('../MODEL/Voiture.php');
    $VOI=new Voiture("","","","","","","","","","","");
    $reponse=$VOI->ListCar($_SESSION['ident']);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php require_once('CSS.php')?>
    <title >ListCar</title>
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
                <div class="scroll" style="width:100%">
    <div class="panel" >
        <div class="body">
            <div class="input-group">
                <label for="searchBox">Recherché</label>
                <input type="search" id="searchBox" placeholder="Recherché...">
            </div>
        </div>
    </div>
                <table class="myTable table hover" >
    <thead>
            <tr>
                <th>ID</th>
                <th>Marque</th>
                <th>Couleur</th>
                <th>Milleage</th>
                <th>Etat</th>
                <th>Prix</th>
                <th>Devise</th>
                <th>Description</th>
                <th>Date Ajout</th>
            </tr>
        </thead>
        <tbody>
        <?php
                while($data=$reponse->fetch()){
              ?>
            <tr>
                    <td><?php print($data['ID']) ?></td>
                    <td><?php print($data['marque']) ?></td>
                    <td><?php print($data['couleur']) ?></td>
                    <td><?php print($data['milleage']) ?></td>
                    <td><?php print($data['etat']) ?></td>
                    <td><?php print($data['prix']) ?></td>
                    <td><?php print($data['devise']) ?></td>
                    <td><?php print($data['description']) ?></td>
                    <td><?php print($data['dateAjout']) ?></td>
                    <td>
                    <a href="../CONTROLLER/EditCar.controller.php?data=<?php print($data['ID'])?>"><img src="ICONES/icons8_Edit_16px_3.png" alt=""></a>
                    <a href="../CONTROLLER/suppCar.Controller.php?data=<?php print($data['ID'])?>"><img src="ICONES/icons8_Delete_Bin_16px.png" alt=""></a>
                </td>
                    </td>
            </tr>
            <?php
                    }
                ?>
        </tbody>
        <tfoot>
        <tr>
                <th>ID</th>
                <th>Marque</th>
                <th>Couleur</th>
                <th>Milleage</th>
                <th>Etat</th>
                <th>Prix</th>
                <th>Devise</th>
                <th>Description</th>
                <th>Date Ajout</th>
            </tr>
        </tfoot>
    
    </table>
                </div>
            </div>
        </div>
    </div>

       <?php require_once('footer.php')?>
       <?php require_once('JS.php')?>
       
</body>
</html>
