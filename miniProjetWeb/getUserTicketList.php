<?php
    session_start();
    if(isset($_SESSION["login"])){
        $idUtil = $_SESSION["login"];
		//var_dump($idUtil);    //PAS DE VAR_DUMP DAMS UN SCRIPT JSON
        header('Content-Type: application/json');
        require_once "db.php";
        if(isset($_GET['etat'])){
            $stmt = $pdo->prepare("SELECT numTicket, etat, dateOuverture, message from ticket where idUtil = :login AND etat = :etat ORDER BY etat , numTicket");
            $stmt->bindParam(':etat',$_GET['etat']);
        }else{
            $stmt = $pdo->prepare("SELECT numTicket, etat, dateOuverture, message from ticket where idUtil = :login ORDER BY etat , numTicket");
        }
        $stmt->bindParam(':login',$idUtil);
        $stmt->execute();
        $result = ($stmt->fetchAll(PDO::FETCH_ASSOC));
        echo(json_encode($result));
    }else{
        echo "Connectez vous";
    }
?>