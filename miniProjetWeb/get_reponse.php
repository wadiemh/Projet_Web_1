<?php
    session_start();
    if(isset($_SESSION["login"])){
        $idUtil = $_SESSION["login"];
        header('Content-Type: application/json');
        require_once "db.php";
        if(isset($_GET["numTicket"])){
            $stmt = $pdo->prepare("SELECT *  from ticket where idUtil = :login and etat = 'fermé' and numTicket = :num");
            $stmt->bindParam(':num',$_GET["numTicket"]);
        }else{
            $stmt = $pdo->prepare("SELECT numTicket, message, reponse  from ticket where idUtil = :login and etat='fermé'");
        }
        $stmt->bindParam(':login',$idUtil);
        $stmt->execute();
        $result = ($stmt->fetchAll(PDO::FETCH_ASSOC));
        echo(json_encode($result));
    }else{
        echo "Connectez vous !";
    }
?>