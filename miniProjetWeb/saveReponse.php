<?php
    session_start();
    if($_SESSION["droits"]=="admin"){
        
        include_once "db.php";

        $msg = isset($_GET["reponse"])?$_GET["reponse"]:NULL;
        $id = isset($_GET["id"])?$_GET["id"]:NULL;

        
        $stmt = $pdo->prepare("UPDATE ticket SET reponse = (:msg) where numTicket = (:id)");
        $stmt->bindParam(':msg', $msg); 
        $stmt->bindParam(':id', $id); 

        $stmt->execute();
    }else{
        echo "Droits insuffisants";
    }
?>