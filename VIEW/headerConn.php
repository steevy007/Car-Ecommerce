
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
                       <span class="ef"><a href="../CONTROLLER/Deconnecter.php"><img src="../VIEW/ICONES/icons8_Logout_Rounded_Down_20px.png" alt=""></a></span>
                       <span class="ef"><a href=""><img src="../VIEW/ICONES/icons8_Male_User_20px_1.png" alt=""></a></span>
                       <?php
                                if($_SESSION['type']=='VENDEUR'){
                            ?>
                        <span class="ef"><a href=""><img src="../VIEW/ICONES/icons8_Money_20px.png" alt=""></a></span>
                       <?php
                                  
                                }
                                ?>
                       </div>
                      
                </div>
                
                <ul>
                    
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="http://marioloncarek.com">About</a>
                        
                    </li>
                    <li><a href="http://marioloncarek.com">Voiture</a>
                       
                    </li>
                    <li><a href="http://marioloncarek.com">Contact</a>
                       
                    </li>
                    <li class="h1"><a href="http://marioloncarek.com"> <img src="../VIEW/ICONES/icons8_Male_User_20px.png" alt=""></a>
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
