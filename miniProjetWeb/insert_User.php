<?php
    session_start();
    require_once "db.php";

  
$lo =isset($_REQUEST["loginn"])?$_REQUEST["loginn"]:NULL  ;
$pas =isset($_REQUEST["passs"])?$_REQUEST["passs"]:NULL ;

try{
  if(($lo!=NULL)&&($pas!=NULL) ){
        //---------------------------------------
	  
         $stmt = $pdo->prepare("insert into utilisateur (idUtil,pass,droits) values (:log,:pass,'client')");
		 $hash =  password_hash($pas,PASSWORD_DEFAULT);
		 $stmt->bindParam(':pass',$hash); 
		 $stmt->bindParam(':log',$lo); 
		 $stmt->execute();
       }
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());


}

unset($pdo);// Close connection
?>	
