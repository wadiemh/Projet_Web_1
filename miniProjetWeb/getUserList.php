<?php
    session_start();
    if($_SESSION["droits"]=="admin"){
        
        header('Content-Type: application/json');
        include_once "db.php";

        $stmt = $pdo->prepare("SELECT idUtil, droits from utilisateur");
        $stmt->execute();
        $result = ($stmt->fetchAll(PDO::FETCH_ASSOC));
        echo(json_encode($result));
    }
    else{
        header('location: ./');
    }
?>