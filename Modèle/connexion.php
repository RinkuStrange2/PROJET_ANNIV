<?php
    try{
        $bdd = new PDO(
            "mysql:host=localhost;dbname=bddanniv;charset=utf8",
            "userAnniv",
            "userAnniv"
        );
    }catch(Exception $e){
        die("Erreur : ".$e->getMessage());
    }
?>