<?php
    session_start();
    if($_SESSION["droits"]=="client"){
        header('Content-Type: application/json');
        try {
            $maCo = new PDO('mysql:host=127.0.0.1;dbname=incidents', 'root', '');
        } catch (PDOException $e) 
        { 
            echo "Erreur PDO : ".$e->getMessage()."<br/>";
            die(); 
        }
		$_log = $_SESSION["login"];
        //$etat = isset($_GET["etat"])?$_GET["etat"]:NULL;

        //  if($etat==NULL || $etat == "tous"){
        //      $stmt = $maCo->prepare("Select numTicket, idUtil, etat, dateOuverture, message from ticket");	
        //}else{
        $stmt = $maCo->prepare("Select * from ticket where idUtil = (:login)");
        $stmt->bindParam(':login', $_log); 
        //}
        $stmt->execute();
        $result = ($stmt->fetchAll(PDO::FETCH_ASSOC));
        echo(json_encode($result));
    }else{
        echo "Droits insuffisants";
    }
?>