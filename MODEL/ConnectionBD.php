<?php
    try{
        $BDD=new PDO('mysql:host=localhost;dbname=Ecommerce;charset=utf8','root','');
        $BDD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(Exception $e){
        die('Error -> '.$e->getMessage());
    }
?>