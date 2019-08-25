<?php
session_start();
$message="";
if(isset($_SESSION['id']) and $_SESSION['id']==-1){
$message="Mot de passe ou Pseudo Incorrect";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php require_once('CSS.php')?>
    <title>Connection</title>
</head>
<body style=" background-image:url('IMAGES/Sans titre-32.jpg');background-size:cover;">
<?php
    if(isset($_SESSION['pseudo']) AND isset($_SESSION['type']) AND !empty($_SESSION['type']) AND !empty($_SESSION['pseudo'])){
        header('Location:../index.php');
    }
?>  
   <div class="con">
       <div class="log">
            
            <div>
                <img src="IMAGES/car-1745056_1920.jpg" alt="">
            </div>
            <div>
                <form action="../CONTROLLER/Controller.traitementConn.php" method="POST">
                    <center class="cent"><img src="ICONES/icons8_Customer_52px.png" alt=""></center>
                    <label for="">Votre Pseudo</label><br>
                    <input type="text" class="i" name="pseudo" placeholder="Votre Pseudo" required><br>
                    <label for="">Votre Password</label><br>
                    <input type="password" class="i" name="pass" placeholder="Votre Password" required><br>
                    <center class="cent1">
                        <a href="">Mot de passe oublie</a>
                        <a href="inscription.php">M'inscrire</a>
                    </center>
                    <?php
                        if(!empty($message)){
                    ?>
                    <center class="cent2"><?php print($message)?></center>
                    <?php
                        }
                    ?>
                    <input type="submit" name="btn" value="Connecter" class="i1"><br>
                    <p>
                    <a href="../index.php"><img src="ICONES/icons8_Home_Page_40px_1.png" alt=""></a>
                    </p>
                      
                    
                </form>
            </div>
       </div>
   </div>
</body>
</html>