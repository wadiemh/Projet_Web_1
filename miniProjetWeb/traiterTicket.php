<?php
    session_start();
    require_once 'db.php';
    $id= isset($_GET['id'])?$_GET['id']:NULL;
    if($_SESSION["droits"]=="admin"){
        $stmt = $pdo->prepare("UPDATE ticket SET etat = 'traitement' WHERE numTicket = (:id)");
        $stmt->bindParam(":id",$id);
        $stmt->execute();

        $stmt = $pdo->prepare("SELECT message, reponse, idutil, dateOuverture, datedetraitement FROM ticket WHERE numTicket = (:id)");
        $stmt->bindParam(":id",$id);
        $stmt->execute();
        $ticket = ($stmt->fetchAll(PDO::FETCH_ASSOC))[0];

        if($ticket["datedetraitement"]==NULL){
            $stmt = $pdo->prepare("UPDATE ticket SET datedetraitement = NOW(), idAdmin = (:login) WHERE numTicket = (:id)");
            $stmt->bindParam(":id",$id);
            $stmt->bindParam(":login",$_SESSION["login"]);
            $stmt->execute();
        }
?>

    
<!DOCTYPE html>

<html lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <script src='js/jquery-3.4.1.min.js'></script>
    <script src='js/07_jquery_base.js'></script>
	<title>foyer 3IL</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<head>
<body class="container">
    <style>
      p {
            color: chocolate;
            font-size: 20px;
        }
    </style>
    <div>
        <img height="100" src="3il.png" alt="3il logo">
    </div>
    <hr />
    
    <span>
        <img height="50" src="LOGO\LOGO WITHOUT TEXT.PNG" alt="3il logo">
    </span>
  
    <br />
    <br />
    <header>
    
        <div class="p-3 mb-2 bg-white text-dark ">
            <p color: black;>TRAITEMENT DU TICKET NUMERO <?php echo $id;?> :</p>
        </div>
    </header>
    <main>
        <p>
            <span style="color: black;font-size: 20px;" >Date d'ouverture du ticket: </span>
            <span style="color: grey;font-size: 15px;" ><?php echo $ticket["dateOuverture"] ?></span>
        </p>
        <?php
            if($ticket["datedetraitement"]!=NULL){
                ?>
                <p>
                <span style="color: black;font-size: 20px;" >Date de prise en charge: </span>
                <span style="color: grey;font-size: 15px;" ><?php echo $ticket["datedetraitement"] ?></span>
                </p>
                <?php
            }
        ?>
        <p>
            <span style="color: black;font-size: 20px;" >Emmeteur: </span>
            <span style="color: grey;font-size: 15px;" ><?php echo $ticket["idutil"] ?></span>
        </p>
        <p>
            <span style="color: black;font-size: 20px;" >Message: </span>
            <span style="color: grey;font-size: 15px;" ><?php echo $ticket["message"] ?></span>
        </p>
        <table>
            <td valign="top">
                <span style="color: black;font-size: 20px;" >Reponse: </span>
            </td>
            <td>
            <form>
                <textarea rows = "5" cols = "60" id = "reponse" ><?php echo $ticket["reponse"];?></textarea><br>
                <input class="btn btn-dark" type= "button", value= "sauvegarder", onclick=save()>
                <input class="btn btn-dark" type= "button", value= "Marquer le ticket comme fermé", onclick=ferme()>
            </form>
            </td>
        </table>
    </main>
        <footer>
        <div style="text-align:center;">
            <hr/>
			<a class="btn btn-dark"  href="./admin.php">GO BACK</a>
        </div>
    </footer>
    <script>
        function save(){
            reponse = document.getElementById("reponse").value.trimEnd(); //trimEnd() enleve lesz espace a la fin de la chaine (mais pas ceux du début)
            id= <?php echo $id;?>;
            $.get("saveReponse.php",{reponse:reponse,id:id});
        }
        function ferme(){
		 id= <?php echo $id;?>;
		 if(confirm("Voulez etes sur le point de fermer le ticket n°" +id+" .\nAppuyez sur OK pour confirmer.\nCette operation est irréversible.")){
		   reponse = document.getElementById("reponse").value.trimEnd();
            $.get("fermerTicket.php",{reponse:reponse,id:id},retour);
		 }
        }
        function retour(code){
            if(code.length<1){
                window.location.replace("admin.php");
            }else{
                window.alert("Erreur : "+code);
            }
        }
    </script>
</body>
</html>
<?php
    }
?>