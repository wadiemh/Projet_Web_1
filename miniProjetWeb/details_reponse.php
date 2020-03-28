<?php
session_start();
require_once 'db.php';
if(!isset($_SESSION['login'])){
	die("connectez vous !");
}
if($_SESSION["droits"]!="client"  && $_SESSION["droits"]!="admin" || !isset($_SESSION['login'])){
	die("connectez vous !!!!!");
}
$id = isset($_GET["id"])?$_GET["id"]:NULL;
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset = "UTF-8">
        <title>Acceuil</title>
        <script src='js/jquery-3.4.1.min.js'></script>
        <script src='js/07_jquery_base.js'></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    
    <body class= "container">
        <div class="page-header">
            <img height="100" src="3il.png" alt="3il logo">
        </div>
        <hr />
    
    
        <header>
            <div style="text-align:center;" >
                <span>
                <img height="50" src="LOGO\LOGO WITHOUT TEXT.PNG" alt="3il logo">
                </span>
            </div>    
        <br />
        </header>
        <br>
        <div id="tableau" style="padding-left:200px">
            Ticket n° <span id="num"></span>
            <br>
            Date d'ouverture : <span id="dateO"></span>
            <br><br>
            Message : <br>
            <i id="message" style="display:inline-block;text-align:top-left;width:400px;height:100px;padding:5px;border:1px solid gray;margin-left:50px;color:gray;"></i>
            <br>
            Reponse, par <b id="admin" ></b> :<br>
            <i id = "reponse" style="display:inline-block;text-align:top-left;width:400px;height:100px;padding:5px;border:1px solid gray;margin-left:50px;color:gray;"></i>
            <br>
            Début du traitement : <span id ="dateT"></span>,
            <br>
            Fermeture du ticket : <span id="dateF"></span>
        </div>

        <footer>
		  
	<hr/><br><br>
        <div style="text-align:center;">
           
			<a class="p-3 mb-2 bg-gradient-light text-dark" href="./"><input class="btn btn-dark" value = "Revenir"  type="button"></a>
        </div>
		<br>
		<br>
		<br>

    </footer>
        <script>
            $.get("get_reponse.php",{numTicket:'<?php echo $id;?>'},affiche);

            function affiche(list){
                data = list[0];
                document.getElementById("num").innerHTML=data["numTicket"];
                dateOuverture = data["dateOuverture"];
                dateTraitement = data["datedetraitement"];
                dateFermeture = data["dateFermeture"];
                document.getElementById("dateO").innerHTML=dateOuverture;
                document.getElementById("message").innerHTML=data["message"];
                document.getElementById("admin").innerHTML=data["idAdmin"];
                document.getElementById("reponse").innerHTML=data["reponse"];
                document.getElementById("dateT").innerHTML=dateTraitement;
                document.getElementById("dateF").innerHTML=dateFermeture;


            }
        </script>
    </body> 

</html>