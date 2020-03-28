<?php
    session_start();
    require_once "db.php";

    $login = isset($_POST['login']) ? $_POST['login'] : NULL;
    $pass = isset($_POST['pass']) ? $_POST['pass'] : NULL; 
    $stmt = $pdo->prepare("select pass, droits from utilisateur where idUtil = (:login)");
    $stmt->bindParam(':login', $login); 
    $stmt->execute();
    $requete = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $match =  $requete[0];
    if($login!=NULL && $pass !=NULL  && $match!=NULL && password_verify($pass, $match['pass'])){
        $_SESSION["login"]=$login;
        $_SESSION["droits"]=$match['droits'];
    }
    header('location: ./');
    exit();
?>