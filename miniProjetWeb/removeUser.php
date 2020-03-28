<?php
    session_start();
    if($_SESSION["droits"]=="admin"){
            
        include_once "db.php";
        $login = isset($_GET['login'])?$_GET['login']:NULL;

        if($_SESSION['login']==$login){
            echo 0;
            exit();
        }
        $stmt = $pdo->prepare("UPDATE ticket set idAdmin = NULL where idAdmin = :login;");
        $stmt->bindParam(':login', $login); 
        $stmt->execute();
        $stmt = $pdo->prepare("DELETE from ticket where idUtil = :login;");
        $stmt->bindParam(':login', $login); 
        $stmt->execute();
        $stmt = $pdo->prepare("DELETE from utilisateur where idUtil = :login;");
        $stmt->bindParam(':login', $login); 
        $stmt->execute();
        echo $login;
    }else{
        echo -1;
    }