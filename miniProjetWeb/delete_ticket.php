<?php
  session_start();
  include 'db.php';
 
  if(isset($_SESSION['login'])){
    $log = $_SESSION['login'];
    if(isset($_GET["numTicket"])){
      $id = $_GET["numTicket"];
      //on verifie que le ticket nest bien a l'etat ouvert et que l'utilisateur de la session l'a bien emis
      $stmt = $pdo->prepare("Select idUtil, etat from ticket where numTicket = :numTicket");
      $stmt->bindParam(':numTicket',$id);
      $stmt->execute();
      $result = ($stmt->fetchAll(PDO::FETCH_ASSOC))[0];
      //on lance la suppression si l'utilisateur a le droit
      if(($result["idUtil"]==$log ||$_SESSION['droits']=='admin') && $result["etat"]=="ouvert"){
        $stmt = $pdo->prepare("DELETE from ticket where numTicket = :numTicket");
        $stmt->bindParam(':numTicket',$id);
        $stmt->execute();
        echo($id);
        exit();
      }
    }
  }
  echo(-1);//code d'erreur