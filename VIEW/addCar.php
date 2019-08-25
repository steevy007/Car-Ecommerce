<?php
    session_start();
    $err="";
    if(!empty($_SESSION['err']) AND isset($_SESSION['err'])){
        $err=$_SESSION['err'];
       }
       $marque="";
       $couleur="";
       $milleage="";
       $etat="";
       $prix="";
       $devise="";
       $desc="";
       $id="";
       $_SESSION['err']="";
       $foto="IMAGES/mercedes-3510327_1920.jpg";
       if( isset($_GET['id']) AND !empty($_GET['id'])){
           $marque=$_GET['marque'];
           $couleur=$_GET['couleur'];
           $milleage=$_GET['milleage'];
           $etat=$_GET['etat'];
           $prix=$_GET['prix'];
           $devise=$_GET['devise'];
           $desc=$_GET['desc'];
           $id=$_GET['id'];
           $foto=$_GET['foto'];
   
          }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php require_once('CSS.php')?>
    <title >AddCar</title>
</head>
<body>
<?php
    if(isset($_SESSION['pseudo']) AND isset($_SESSION['type']) AND !empty($_SESSION['type']) AND !empty($_SESSION['pseudo']) ){
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
                    <form action="../CONTROLLER/Contoller.addCar.php" enctype="multipart/form-data" Method="POST">
                        <div class="f1">
                                    <div class="cf1">
                                            <div>
                                                <label for="">Marque</label><br>
                                                <select name="marque" id="">
                                                    <option value="TOYOTA">TOYOTA</option>
                                                    <option value="NISSAN">NISSAN</option>
                                                    <option value="JEEP">JEEP</option>
                                                    <option value="PORSH CAYENNE">PORSH CAYENNE</option>
                                                    <option value="CHEVROLET">CHEVROLET</option>
                                                    <option value="TRACKER">TRACKER</option>
                                                    <option value="MERCEDES">MERCEDES</option>
                                                    <option value="PSEUGOT">PSEUGOT</option>
                                                    <option value="FORD">FORD</option>
                                                    <option value="BMW">BMW</option>
                                                </select>
                                            </div>
                                            <div>
                                                <label for="">Couleur</label><br>
                                                <select name="couleur" id="">
                                                    <option value="ROUGE">ROUGE</option>
                                                    <option value="NOIR">NOIR</option>
                                                    <option value="BLANC">BLANC</option>
                                                    <option value="VERT">VERT</option>
                                                    <option value="JAUNE">JAUNE</option>
                                                    <option value="GRIS">GRIS</option>
                                                </select>
                                            </div>
                                        </div>    
                            <div class="cf2">
                                <img src="IMAGES/aston-martin-dbs-3170302_1920.jpg" alt="">
                            </div>
                        </div>
                        <div class="cf001">
                            <div>
                                <label for="">Milleage</label><br>
                                <input type="number" value="<?php print($milleage) ?>"  name="milleage" required>
                            </div>
                            <div>
                            <label for="">Etat</label><br>
                            <select name="etat" id="">
                                                    <option value="NEUF">NEUF</option>
                                                    <option value="USAGE">USAGE</option>
                                                </select>
                            </div>
                            <div>
                            <label for="">Prix</label><br>
                                <input type="number" value="<?php print($prix) ?>"  name="prix" required>
                            </div>
                        </div>
                        <div class="cf002">
                                <div>
                                <label for="">Devise</label><br>
                                <select name="devise" id="">
                                                    <option value="US">US</option>
                                                    <option value="CAD">CAD</option>
                                                    <option value="HTG">HTG</option>
                                                    <option value="EURO">EURO</option>
                                                    <option value="PESO">PESO</option>
                                                </select> 
                                
                                </div>
                                <div>
                                
                                <input type="file" size="100" name="file" id="" value="Charger" required>
                                </div>
                        </div>
                        <div class="cf003">
                           <center>
                           <label for="">Description</label><br>
                           <textarea name="desc" id="" width="80%" ><?php print($desc) ?></textarea>
                           </center>
                            <div>
                                <center style="color:red"><?php print($err) ?></center>
                            </div>
                           <div>
                               <input type="submit" src="" alt="" value="Ajouter">
                               <input type="reset" value="Renitialiser">
                           </div>
                        </div>
                    </form>
                    <?php
                     
                    ?>
                </div>
            </div>
        </div>
    </div>

       <?php require_once('footer.php')?>
       <?php require_once('JS.php')?>
</body>
</html> 