<?php
session_start();
if(isset($_SESSION['pseudo']) AND !empty($_SESSION['pseudo'])){
    session_destroy();
    header('Location:../index.php');
}
?>