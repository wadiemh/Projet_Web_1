<?php
session_start();
require_once 'db.php';

try{
    if(isset($_REQUEST["MESSAGE"])){
        //---------------------------------------
        $sql = "INSERT INTO ticket (dateOuverture,etat,idUtil,message) VALUES (NOW(),'ouvert',:b,:a)";
        $stmt = $pdo->prepare($sql);
        //Bind parameters to statement
        $stmt->bindParam(':b', $_SESSION['login']);
        $stmt->bindParam(':a', $_REQUEST['MESSAGE']);
        // Execute the prepared statement
        $stmt->execute();
    }
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}

unset($pdo);// Close connection
?>	