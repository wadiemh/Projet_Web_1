<?php
    session_start();
    if($_SESSION["droits"]=="admin"){
        
        header('Content-Type: application/json');
        include_once "db.php";

        $etat = isset($_GET["etat"])?$_GET["etat"]:NULL;
        
        if($etat==NULL || $etat == "tous"){
            $stmt = $pdo->prepare("SELECT numTicket, idUtil, etat, dateOuverture, message from ticket order by etat desc,numTicket");
        }else{
            $stmt = $pdo->prepare("SELECT * from ticket where etat = (:etat)");
            $stmt->bindParam(':etat', $etat); 
        }
        $stmt->execute();
        $result = ($stmt->fetchAll(PDO::FETCH_ASSOC));
        echo(json_encode($result));
    }else{
        echo "Droits insuffisants";
    }
?>