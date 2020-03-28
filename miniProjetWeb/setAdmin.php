<?php
    session_start();
    if($_SESSION["droits"]=="admin"){
        
        include_once "db.php";

        $id = isset($_GET["login"])?$_GET["login"]:NULL;

        $stmt = $pdo->prepare("UPDATE utilisateur SET droits = 'admin' where idUtil = (:id)");
        $stmt->bindParam(':id', $id); 

        $stmt->execute();
        echo $id;
    }else{
        echo -1;
    }
?>