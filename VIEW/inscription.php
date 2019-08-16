<?php
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
    <link rel="stylesheet" href="../VIEW/CSS/style.css">
    <link rel="stylesheet" href="../VIEW/CSS/ionicons.min.css">
    <link rel="stylesheet" href="../VIEW/CSS/index.css">
    <link rel="stylesheet" href="../VIEW/CSS/owl.carousel.min.css">
    <link rel="stylesheet" href="../VIEW/CSS/owl.theme.default.min.css">
    <link rel="stylesheet" href="../VIEW/CSS/responsive.css">
    <title>Inscription</title>
</head>
<body style="background-image: url('../VIEW/IMAGES/bmw-4378348_1920.jpg');background-repeat: no-repeat;background-size: cover">
    
    <div class="header">
            <div class="menu-container">
                    <div class="menu">
                 
                        <ul>
                            
                            <li><a href="../index.html">Home</a></li>
                            <li><a href="http://marioloncarek.com">About</a>
                                
                            </li>
                            <li><a href="http://marioloncarek.com">Categorie</a>
                                <ul>
                                    <li><a href="http://marioloncarek.com">Bmw</a></li>
                                    <li><a href="#">Jeep</a></li>
                                    <li><a href="#">Toyota</a></li>
                                </ul>
                            </li>
                            <li><a href="http://marioloncarek.com">Contact</a>
                               
                            </li>
                            <li><a href="http://marioloncarek.com"> <img src="../VIEW/ICONES/icons8_Male_User_20px.png" alt=""></a>
                                <ul>
                                    <li><a href="../VIEW/connecter.html">Connecter</a></li>
                                    <li><a href="../VIEW/inscription.html">M'inscrire</a></li>
                                    
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            
            
            </div>

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
                                                        <input type="tel" name="Telephone" placeholder="votre portable"  required>
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
            
     <script src="../VIEW/JS/jquery-3.3.1.min.js"></script>
     <script src="../VIEW/JS/megamenu.js"></script>
</body>
</html>