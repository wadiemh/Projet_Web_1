<?php
    session_start();
    if($_SESSION["droits"]=="admin"){
        
        include_once "db.php";

        $msg = isset($_GET["reponse"])?$_GET["reponse"]:NULL;
        $id = isset($_GET["id"])?$_GET["id"]:NULL;

        if($msg !=NULL){
            $stmt = $pdo->prepare("UPDATE ticket SET reponse = (:msg), etat = 'fermé', dateFermeture=NOW() , idAdmin = (:log) where numTicket = (:id)");
            $stmt->bindParam(':msg', $msg); 
            $stmt->bindParam(':id', $id); 
            $stmt->bindParam(':log', $_SESSION["login"]); 


            $stmt->execute();
        }else{
            echo "Réponse Vide";
        }
    }else{
        echo "Droits insuffisants";
    }
?>