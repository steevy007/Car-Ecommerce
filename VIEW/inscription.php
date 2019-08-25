<?php
session_start();
    $message="";
    if(isset($_GET['Message'])){
        $message=$_GET['Message'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php require_once('CSS.php')?>
    <title>Inscription</title>
</head>
<body style="background-image: url('../VIEW/IMAGES/bmw-4378348_1920.jpg');background-size: cover">
<?php
    if(isset($_SESSION['pseudo']) AND isset($_SESSION['type']) AND !empty($_SESSION['type']) AND !empty($_SESSION['pseudo'])){
        header('Location:../index.php');
        
        }else{
            require_once('header.php');
        }
    
?>   
                <div class="container">
                  <div class="inc">
                        <div class="inscr">
                                <form action="../CONTROLLER/Controller.TraitementInsc.php" method="POST">
                                    <div class="in">
                                            <div class="inp" >
                                                    <label for="nom">Nom</label><br>
                                                    <input type="text" name="nom" placeholder="votre nom" required>
                                                </div>
                                                <div class="inp" >
                                                        <label for="prenom">Prenom</label><br>
                                                        <input type="text" name="prenom" placeholder="votre prenom"  required>
                                                 </div>
                                    </div>
                                    <div class="in">
                                            <div class="inp" >
                                                    <label for="adresse">Adresse</label><br>
                                                    <input type="text" name="adresse" placeholder="votre adresse"  required>
                                                </div>
                                                <div class="inp" >
                                                        <label for="telephone">Telephone</label><br>
                                                        <input type="number" name="Telephone" placeholder="12345678"  required>
                                                 </div>
                                    </div>

                                    

                                    <div class="in">
                                            <div class="inp" >
                                                <label for="">Pays</label><br>
                                                   <select name="pays">
                                                       <option value="HAITI">HAITI</option>
                                                       <option value="CANADA">MEXIQUE</option>
                                                       <option value="MEXIQUE">USA</option>
                                                       <option value="FRANCE">FRANCE</option>
                                                   </select>
                                                </div>
                                                <div class="inp" >
                                                        <label for="">Type Inscription</label><br>
                                                        <select name="type">
                                                            <option value="SIMPLE">SIMPLE</option>
                                                            <option value="VENDEUR">VENDEUR</option>
                                                        </select>
                                                     </div>
                                                 </div>

                                                 <div class="in">
                                                        <div class="inp" >
                                                                <label for=pseudo>Pseudo</label><br>
                                                                <input type="text" name="pseudo" placeholder="votre pseudo"  required>
                                                            </div>
                                                            <div class="inp" >
                                                                    <label for="email">Email</label><br>
                                                                    <input type="email" name="mail" placeholder="votre mail"  required>
                                                             </div>
                                                </div>

                                                <div class="in">
                                                        <div class="inp" >
                                                                <label for="Password">Password</label><br>
                                                                <input type="password" name="password" placeholder="votre password"  required>
                                                            </div>
                                                            <div class="inp" >
                                                                    <label for="Password">Confirmation Password</label><br>
                                                                    <input type="password" name="password1" placeholder="confirmer password"  required>
                                                             </div>
                                                </div>

                                                <div class="in">
                                                        <div class="inp" >
                                                                <label for="">Date de Naissance</label><br>
                                                                <input type="date" name="dateN">
                                                            </div>
                                                            
                                                </div>
                                                <?php
                                                    if(!empty($message)){
                                                ?>
                                                <br>
                                                <center class="error"><?php print $message ?></center>
                                                <br>
                                                <?php 
                                                
                                                    }
                                                ?>
                                                <div class="bt">
                                                        <input type="submit" name="sub" value="Valider">
                                                </div>
                                    </div>
                                    
                                </form>
                            </div>
                  </div>
                </div>
            <?php require_once('footer.php')?>
            <?php require_once('JS.php')?>
</body>
</html>