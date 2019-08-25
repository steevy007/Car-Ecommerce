<?php
    session_start();
    $err="";
    $_SESSION['err']="";
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
    <title >EditCar.php</title>
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
                    <form action="../CONTROLLER/EditCar1.controller.php" method="POST">
                    <div class="f1">
                                    <div class="cf1">
                                            <div>
                                                <label for="">Marque</label><br>
                                                <select name="marque" id="">
                                                    <option value="TOYOTA" <?php if($marque == "TOYOTA") print("selected='selected'"); ?>>TOYOTA</option>
                                                    <option value="NISSAN" <?php if($marque == "NISSAN") print("selected='selected'"); ?>>NISSAN</option>
                                                    <option value="JEEP" <?php if($marque == "JEEP") print("selected='selected'"); ?>>JEEP</option>
                                                    <option value="PORSH CAYENNE" <?php if($marque == "PORSH CAYENNE") print("selected='selected'"); ?>>PORSH CAYENNE</option>
                                                    <option value="CHEVROLET" <?php if($marque == "CHEVROLET") print("selected='selected'"); ?>>CHEVROLET</option>
                                                    <option value="TRACKER" <?php if($marque == "TRACKER") print("selected='selected'"); ?>>TRACKER</option>
                                                    <option value="MERCEDES" <?php if($marque == "MERCEDES") print("selected='selected'"); ?>>MERCEDES</option>
                                                    <option value="PSEUGOT" <?php if($marque == "PSEUGOT") print("selected='selected'"); ?>>PSEUGOT</option>
                                                    <option value="FORD" <?php if($marque == "FORD") print("selected='selected'"); ?>>FORD</option>
                                                    <option value="BMW" <?php if($marque == "BMW") print("selected='selected'"); ?>>BMW</option>
                                                </select>
                                            </div>
                                            <div>
                                                <label for="">Couleur</label><br>
                                                <select name="couleur" id="">
                                                    <option value="ROUGE" <?php if($couleur == "ROUGE") print("selected='selected'"); ?>>ROUGE</option>
                                                    <option value="NOIR" <?php if($couleur == "NOIR") print("selected='selected'"); ?>>NOIR</option>
                                                    <option value="BLANC" <?php if($couleur == "BLANC") print("selected='selected'"); ?>>BLANC</option>
                                                    <option value="VERT" <?php if($couleur == "VERT") print("selected='selected'"); ?>>VERT</option>
                                                    <option value="JAUNE" <?php if($couleur == "JAUNE") print("selected='selected'"); ?>>JAUNE</option>
                                                    <option value="GRIS" <?php if($couleur == "GRIS") print("selected='selected'"); ?>>GRIS</option>
                                                </select>
                                            </div>
                                        </div>    
                            <div class="cf2">
                                <img name="foto" src="<?php print($foto) ?>" alt="">
                                <input type="hidden" name="id" value="<?php print($id) ?>">
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
                                                    <option value="NEUF" <?php if($etat == "NEUF") print("selected='selected'"); ?>>NEUF</option>
                                                    <option value="USAGE" <?php if($etat == "USAGE") print("selected='selected'"); ?>>USAGE</option>
                                                </select>
                            </div>
                            <div>
                            <label for="">Prix</label><br>
                                <input type="number" value="<?php print($prix) ?>" name="prix" required>
                            </div>
                        </div>
                        <div class="cf002">
                                <div>
                                <label for="">Devise</label><br>
                                <select name="devise" id="">
                                                    <option value="US" <?php if($devise == "US") print("selected='selected'"); ?>>US</option>
                                                    <option value="CAD" <?php if($devise== "CAD") print("selected='selected'"); ?>>CAD</option>
                                                    <option value="HTG" <?php if($devise == "HTG") print("selected='selected'"); ?>>HTG</option>
                                                    <option value="EURO" <?php if($devise == "EURO") print("selected='selected'"); ?>>EURO</option>
                                                    <option value="PESO" <?php if($devise == "PESO") print("selected='selected'"); ?>>PESO</option>
                                                </select> 
                                
                                </div>
                                <div>
                                
                                
                                </div>
                        </div>
                        <div class="cf003">
                           <center>
                           <label for="">Description</label><br>
                           <textarea name="desc" value="" id="" width="80%" ><?php print($desc) ?></textarea>
                           </center>
                            <div>
                                <center style="color:red"><?php print($err) ?></center>
                            </div>
                           <div>
                               <input type="submit" name="btn" src="" alt="" value="Modifier">
                              
                           </div>
                        </div>
                    </form>
                    </form>
                </div>
            </div>
        </div>
    </div>

       <?php require_once('footer.php')?>
       <?php require_once('JS.php')?>
</body>
</html> 