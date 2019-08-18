<?php
    session_start();
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>megamenu.js | Last responsive megamenu you'll ever need</title>
    <meta name="description" content="">
    <meta name="keywords" content="" />
    <meta name="author" content="Mario Loncarek">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="VIEW/CSS/style.css">
    <link rel="stylesheet" href="VIEW/CSS/ionicons.min.css">
    <link rel="stylesheet" href="VIEW/CSS/index.css">
    <link rel="stylesheet" href="VIEW/CSS/responsive.css">
    
</head>

<body>
<?php
    if(isset($_SESSION['pseudo']) AND isset($_SESSION['type']) AND !empty($_SESSION['type']) AND !empty($_SESSION['pseudo'])){

    
?>  

<div class="header">
    <div class="menu-container">
            <div class="menu">
                <div class="loa">
                       <div>
                       <span>Type Utilisateur </span>
                       <span><?php print($_SESSION['type'])?></span>
                       <span><b><?php print(strtoupper($_SESSION['pseudo']))?></b></span>
                       </div>
                       <div>
                       <span class="ef"><a href="CONTROLLER/Deconnecter.php"><img src="VIEW/ICONES/icons8_Logout_Rounded_Down_20px.png" alt=""></a></span>
                       <span class="ef"><a href=""><img src="VIEW/ICONES/icons8_Male_User_20px_1.png" alt=""></a></span>
                       <?php
                                if($_SESSION['type']=='VENDEUR'){
                            ?>
                       <span class="ef"><a href=""><img src="VIEW/ICONES/icons8_Money_20px.png" alt=""></a></span>
                       <?php
                                  
                                }
                                ?>
                       </div>
                      
                </div>
                
                <ul>
                    
                    <li><a href="#">Home</a></li>
                    <li><a href="http://marioloncarek.com">About</a>
                        
                    </li>
                    <li><a href="http://marioloncarek.com">Voiture</a>
                       
                    </li>
                    <li><a href="http://marioloncarek.com">Contact</a>
                       
                    </li>
                    <li class="h1"><a href="http://marioloncarek.com"> <img src="VIEW/ICONES/icons8_Male_User_20px.png" alt=""></a>
                        <ul >
                            <li><a href="">Profil</a></li>
                            <li><a href="CONTROLLER/Deconnecter.php">Deconnexion</a></li>
                            <?php
                                if($_SESSION['type']=='VENDEUR'){
                            ?>
                            <li><a href="">Dashboard</a></li>
                            <?php
                                  
                                }
                                ?>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    
    
    </div>
    <?php
    }else{
    ?>

    <div class="header">
    <div class="menu-container">
            <div class="menu">
                <div class="loo">
                        <a href="VIEW/inscription.php">M'inscrire</a>
                        <a href="VIEW/connecter.php">Me Connecter</a>
                       
                </div>
                <hr class="h">
                <ul>
                    
                    <li><a href="#">Home</a></li>
                    <li><a href="http://marioloncarek.com">About</a>
                        
                    </li>
                    <li><a href="http://marioloncarek.com">Voiture</a>
                       
                    </li>
                    <li><a href="http://marioloncarek.com">Contact</a>
                       
                    </li>
                    <li class="h1"><a href="http://marioloncarek.com"> <img src="VIEW/ICONES/icons8_Male_User_20px.png" alt=""></a>
                        <ul >
                            <li><a href="VIEW/connecter.php">Connecter</a></li>
                            <li><a href="VIEW/inscription.php">M'inscrire</a></li>
                            
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    
    
    </div>
    <?php
    }
    ?>
    <div class="carousel ">
            
    </div>

    <div class="s-car">
        <center>
            <div class="pre-tit">
                <h3>Quelques uns de nos voitures</h3><br>
                <span><i>Explore notre site web pour pouvoir trouvez la voiture de votre choix</i></span>
            </div>
        </center>
        <div class="container">
            <div class="s1-car">
                <div class="s2-car">
                   <div>
                    <img src="VIEW/IMAGES/Sans titre-10.jpg" alt="" class="img1">
                   </div>
                   <div class="info">
                        <h4><i>Titre</i></h4>
                        <p>
                            Grâce à internet on peut entres autres, converser avec ses amis par tout dans le monde, trouver des informations sur n'importe quel sujet, publier un texte en lui ajoutant des effets multimédias.
                        </p>
                        <div class="info-btn">
                            <a href=""><img src="VIEW/ICONES/icons8_Plus_52px.png" alt="" class=""></a>
                        </div>
                   </div>
                </div>
                <div class="s2-car">
                    <div>
                        <img src="VIEW/IMAGES/Sans titre-20.jpg" alt="" class="img1" >
                       </div>
                       <div class="info">
                        <h4><i>Titre</i></h4>
                        <p>
                            Grâce à internet on peut entres autres, converser avec ses amis par tout dans le monde, trouver des informations sur n'importe quel sujet, publier un texte en lui ajoutant des effets multimédias.
                        </p>
                        <div class="info-btn">
                            <a href=""><img src="VIEW/ICONES/icons8_Plus_52px.png" alt="" class=""></a>
                        </div>
                       </div>
                </div>
                <div class="s2-car">
                    <div>
                        <img src="VIEW/IMAGES/Sans titre-30.jpg" alt="" class="img1">
                       </div>
                       <div class="info">
                        <h4><i>Titre</i></h4>
                        <p>
                            Grâce à internet on peut entres autres, converser avec ses amis par tout dans le monde, trouver des informations sur n'importe quel sujet, publier un texte en lui ajoutant des effets multimédias.
                        </p>
                        <div class="info-btn">
                            <a href=""><img src="VIEW/ICONES/icons8_Plus_52px.png" alt="" class=""></a>
                        </div>
                       </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pied">
        <div class="conteneur">
            <div class="cont0">
                <div class="c1">
                    <h5>Naviguez</h5>
                    
                        <li><a href=""> <img src="VIEW/ICONES/icons8_Horizontal_Line_16px.png" alt=""> Accueil</a></li>
                        <li><a href=""> <img src="VIEW/ICONES/icons8_Horizontal_Line_16px.png" alt=""> Nos Voiture</a></li>
                        <li><a href=""> <img src="VIEW/ICONES/icons8_Horizontal_Line_16px.png" alt=""> Contact</a></li>
                        <li><a href=""> <img src="VIEW/ICONES/icons8_Horizontal_Line_16px.png" alt=""> Liens</a></li>
                   
                </div>
                <div class="c1">
                        <h5>Services</h5>
                        <li><a href=""> <img src="VIEW/ICONES/icons8_Horizontal_Line_16px.png" alt=""> Lien1</a></li>
                        <li><a href=""> <img src="VIEW/ICONES/icons8_Horizontal_Line_16px.png" alt=""> Lien1</a></li>
                        <li><a href=""> <img src="VIEW/ICONES/icons8_Horizontal_Line_16px.png" alt=""> Lien1</a></li>
                        <li><a href=""> <img src="VIEW/ICONES/icons8_Horizontal_Line_16px.png" alt=""> Lien1</a></li>
                        <li><a href=""> <img src="VIEW/ICONES/icons8_Horizontal_Line_16px.png" alt=""> Lien1</a></li>
                        <li><a href=""> <img src="VIEW/ICONES/icons8_Horizontal_Line_16px.png" alt=""> Lien1</a></li>
                 </div>
                 <div  class="c1">
                        <h5>Naviguez</h5>
                        <div>
                            <a href=""><i><img src="VIEW/ICONES/icons8_Facebook_F_40px.png" alt=""></i></a>
                            <a href=""><i><img src="VIEW/ICONES/icons8_Twitter_40px.png" alt=""></i></a>
                            <a href=""><i><img src="VIEW/ICONES/icons8_Play_Button_40px.png" alt=""></i></a>
                            <a href=""><i><img src="VIEW/ICONES/icons8_Instagram_40px.png" alt=""></i></a>  
                        </div>
                 </div>
                 <div class="c1">
                        <h5>Abonnez</h5>
                        <form action="">
                            <input type="text" placeholder="Votre Mail">
                            <h6>
                                <a href="">Abonner</a>
                            </h6>
                        </form>
                 </div>
            </div>    
        </div>
        <hr>
        <div class="credit">
                
            <center>@Copyright ING Steeve Sanon</center>
        </div>
    </div>
    
    <script src="VIEW/JS/jquery-3.3.1.min.js"></script>
    <script src="VIEW/JS/megamenu.js"></script>
</body>

</html>