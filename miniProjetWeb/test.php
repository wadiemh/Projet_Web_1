<?php
    require_once "db.php";
    $stmt = $pdo->prepare("insert into utilisateur (idUtil,pass,droits) values ('user',:pass,'client')");
    $hash =  password_hash("client",PASSWORD_DEFAULT);
    $stmt->bindParam(':pass',$hash); 
    $stmt->execute();

?>