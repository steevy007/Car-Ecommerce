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
    <title >Message</title>
</head>
<body>
<?php
    if(isset($_SESSION['pseudo']) AND isset($_SESSION['type']) AND !empty($_SESSION['type']) AND !empty($_SESSION['pseudo'])){
        require_once('headerConn.php');
    }else{
        header('Location:Connecter.php');
    }
?>  
<div id="dash">
        <div class="sec ">
            <div class="sec2">
            <div class="sec001">
                    <center><h4 style="font-family:Arial"> <img src="ICONES/icons8_Group_Message_24px.png" alt=""> Boite Messagerie de <br> <?php print($_SESSION['pseudo'])?></h4></center>
                    <a href="" id="l1"><img src="ICONES/icons8_Chat_24px.png" alt="" > Jean</a>
                    <a href=""><img src="ICONES/icons8_Chat_24px.png" alt=""> Jacques</a>
                    <a href=""><img src="ICONES/icons8_Chat_24px.png" alt=""> Luc</a>
                    <a href=""><img src="ICONES/icons8_Chat_24px.png" alt=""> Sloane</a>
                    <a href="" id="l1"><img src="ICONES/icons8_Chat_24px.png" alt="" > Jean</a>
                    <a href=""><img src="ICONES/icons8_Chat_24px.png" alt=""> Jacques</a>
                    <a href=""><img src="ICONES/icons8_Chat_24px.png" alt=""> Luc</a>
                    <a href=""><img src="ICONES/icons8_Chat_24px.png" alt=""> Sloane</a>
                    <a href="" id="l1"><img src="ICONES/icons8_Chat_24px.png" alt="" > Jean</a>
                    <a href=""><img src="ICONES/icons8_Chat_24px.png" alt=""> Jacques</a>
                    <a href=""><img src="ICONES/icons8_Chat_24px.png" alt=""> Luc</a>
                    <a href=""><img src="ICONES/icons8_Chat_24px.png" alt=""> Sloane</a>
                    <a href="" id="l1"><img src="ICONES/icons8_Chat_24px.png" alt="" > Jean</a>
                    <a href=""><img src="ICONES/icons8_Chat_24px.png" alt=""> Jacques</a>
                    <a href=""><img src="ICONES/icons8_Chat_24px.png" alt=""> Luc</a>
                    <a href=""><img src="ICONES/icons8_Chat_24px.png" alt=""> Sloane</a>
                </div>
                <hr>
                <div class="sec002">
                    <div class="text">
                        <div class="full-text">
                            <div class="receive">
                            <span ><img src="ICONES/icons8_Paper_Plane_24px_1.png" alt=""> Recu</span> <br>
                            </div>
                            <div class="sendT">
                            <span >Envoye <img src="ICONES/icons8_Email_Send_24px.png" alt=""></span>
                            </div>

                            <div class="receive">
                            <span ><img src="ICONES/icons8_Paper_Plane_24px_1.png" alt=""> Recu</span> <br>
                            </div>
                            <div class="sendT">
                            <span >Envoye <img src="ICONES/icons8_Email_Send_24px.png" alt=""></span>
                            </div>

                            <div class="receive">
                            <span ><img src="ICONES/icons8_Paper_Plane_24px_1.png" alt=""> Recu</span> <br>
                            </div>
                            <div class="sendT">
                            <span >Envoye <img src="ICONES/icons8_Email_Send_24px.png" alt=""></span>
                            </div>

                            <div class="receive">
                            <span ><img src="ICONES/icons8_Paper_Plane_24px_1.png" alt=""> Recu</span> <br>
                            </div>
                            <div class="sendT">
                            <span >Envoye <img src="ICONES/icons8_Email_Send_24px.png" alt=""></span>
                            </div>

                            <div class="receive">
                            <span ><img src="ICONES/icons8_Paper_Plane_24px_1.png" alt=""> Recu</span> <br>
                            </div>
                            <div class="sendT">
                            <span >Envoye <img src="ICONES/icons8_Email_Send_24px.png" alt=""></span>
                            </div>

                            <div class="receive">
                            <span ><img src="ICONES/icons8_Paper_Plane_24px_1.png" alt=""> Recu</span> <br>
                            </div>
                            <div class="sendT">
                            <span >Envoye <img src="ICONES/icons8_Email_Send_24px.png" alt=""></span>
                            </div>

                            <div class="receive">
                            <span ><img src="ICONES/icons8_Paper_Plane_24px_1.png" alt=""> Recu</span> <br>
                            </div>
                            <div class="sendT">
                            <span >Envoye <img src="ICONES/icons8_Email_Send_24px.png" alt=""></span>
                            </div>

                            <div class="receive">
                            <span ><img src="ICONES/icons8_Paper_Plane_24px_1.png" alt=""> Recu</span> <br>
                            </div>
                            <div class="sendT">
                            <span >Envoye <img src="ICONES/icons8_Email_Send_24px.png" alt=""></span>
                            </div>

                            <div class="receive">
                            <span ><img src="ICONES/icons8_Paper_Plane_24px_1.png" alt=""> Recu</span> <br>
                            </div>
                            <div class="sendT">
                            <span >Envoye <img src="ICONES/icons8_Email_Send_24px.png" alt=""></span>
                            </div>
                        </div>
                        <div class="send">
                            <form action="">
                                <input id="s" type="text" required>
                                <input id="s2" type="submit" value="Envoyer">
                            </form>
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